<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Documentation;
use App\Models\Vendor;
use App\Models\DocumentationType;


class Docs extends Component
{
    use WithPagination;

    public $acceptsWebP;
    public $selectedVendor = null;
    public $selectedType = null;
    public $perPage = 12; // Кол-во товаров на странице
    public $perPageOptions = [12, 24, 36]; // Опции кол-ва товаров


    public string $layoutType = 'card'; // Тип отображения

    public bool $menuIsOpen = false; // Флаг открытия меню

    public function toggleMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen;
    }

    public function changePerPage($newValue)
    {
        $this->perPage = $newValue;
        $this->menuIsOpen = false;
        $this->resetPage(); // Всегда возвращаемся на первую страницу
    }

    public function switchLayout()
    {
        $newLayoutType = $this->layoutType === 'card' ? 'list' : 'card';
        $this->layoutType = $newLayoutType;
        session()->put('layoutType', $newLayoutType);
    }

    public function mount($acceptsWebP)
    {
        $this->acceptsWebP = $acceptsWebP;
    }

    public function render()
    {
        $vendors = Vendor::orderBy('name')->get();
        $types = DocumentationType::orderBy('name')->get();
        // Базовый запрос к продуктам
        $query = Documentation::select('*');

        // Применяем фильтр по бренду, если выбрано какое-то значение

        if (!is_null($this->selectedVendor)) {
            $query->where('vendor_id', $this->selectedVendor); // Предположим, что vendor_id существует в таблице documentation
        }

        // Аналогично применяем фильтр по типу документации
        if (!is_null($this->selectedType)) {
            $query->where('type_id', $this->selectedType); // Предположим, что type_id существует в таблице documentation
        }


        // Выполняем пагинацию
        $docs = $query->with('media')->paginate($this->perPage)->withQueryString();

        return view('livewire.front.docs', compact('docs', 'vendors', 'types'));
    }
}
