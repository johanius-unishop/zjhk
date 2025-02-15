<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithProblemImagesComponent extends Component
{
    use LivewireAlert;
    public $productWithProblemImages;
    public $selectedOption;
    public $inStock;
    public $composite;

    // Этот метод будет вызываться при каждом обновлении компонентов
    protected $listeners = ['updateFilter'];

    public function mount()
    {
        // Получение параметров из sessionStorage
        $this->selectedOption = session()->get('selectedOption', 0);
        $this->inStock = session()->get('inStock', 0);
        $this->composite = session()->get('composite', 0);

        // Если выбранная опция неверная, устанавливаем её значение по умолчанию
        if ($this->selectedOption === null || $this->selectedOption < 0) {
            $this->selectedOption = 0;
        }

        // Вызываем метод applyFilter для применения фильтров
        $this->applyFilter();
    }

    public function updateFilter($filter)
    {
        // Обновление значений фильтров
        $this->selectedOption = $filter['selectedOption'] ?? 0;
        $this->inStock = $filter['inStock'] ?? 0;
        $this->composite = $filter['composite'] ?? 0;

        // Применение новых фильтров
        $this->applyFilter();
    }

    private function applyFilter()
    {
        // Запись текущих значений фильтров в sessionStorage
        session(['selectedOption' => $this->selectedOption]);
        session(['inStock' => $this->inStock]);
        session(['composite' => $this->composite]);

        // Логика фильтрации остается такой же, как у вас
        $query = Product::query();

        if ($this->composite == 2) {
            $query->where('composite_product', '1');
        }
        if ($this->composite == 1) {
            $query->where('composite_product', '0');
        }

        if ($this->inStock) {
            $query->where('stock', '>', 0);
        }

        if ($this->selectedOption == 0) {
            $query->doesntHave('media', 'and', function ($query) {
                $query->where('collection_name', 'images');
            });
        } else {
            $query->withCount([
                'media as image_count' => function ($query) {
                    $query->where('collection_name', 'images');
                },
            ])->havingRaw("image_count = ?", [$this->selectedOption]);
        }

        $this->productWithProblemImages = $query->get();
    }

    public function accept_filter()
    {
        // Проверка корректности выбранной опции
        if ($this->selectedOption === null || $this->selectedOption < 0) {
            $this->alert('error', 'Необходимо выбрать корректную опцию.');
            return;
        }

        // Применение фильтров
        $this->applyFilter();

        // Отправка уведомления о применении фильтра
        $this->dispatch('toast', message: 'Фильтр применён', notify: 'success');
    }

    public function render()
    {
        return view('livewire.product-with-problem-images', [
            'productWithProblemImages' => $this->productWithProblemImages,
        ]);
    }
}