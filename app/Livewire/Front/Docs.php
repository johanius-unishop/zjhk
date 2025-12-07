<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Documentation;
use App\Models\Vendor;
use App\Models\DocumentationType;
use Livewire\Attributes\On;


class Docs extends Component
{
    use WithPagination;

    public $acceptsWebP;
    public $selectedVendor = null;
    public $selectedType = null;
    public $perPage = 12; // Кол-во товаров на странице
    public $perPageOptions = [12, 24, 36]; // Опции кол-ва товаров



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

    public function mount($acceptsWebP)
    {
        $this->acceptsWebP = $acceptsWebP;
    }

    public function render()
    {
        $usedVendorIds = Documentation::select('vendor_id')->distinct()->pluck('vendor_id');
        $vendors = Vendor::whereIn('id', $usedVendorIds)
            ->orderBy('name')
            ->get();

        $usedTypeIds = Documentation::select('type_id')->distinct()->pluck('type_id');
        $types = DocumentationType::whereIn('id', $usedTypeIds)
            ->orderBy('name')
            ->get();

        // Базовый запрос к продуктам
        $query = Documentation::all()->orderBy('order_column', 'asc');

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

        $this->dispatch('update-docs');

        return view('livewire.front.docs', compact('docs', 'vendors', 'types'));
    }

    #[On('update-value')]
    public function updateValue(array $payload)
    {
        if (isset($payload[0]) && isset($payload[1])) {
            $fieldName = $payload[0];
            $selectedValue = $payload[1];

            switch ($fieldName) {
                case 'vendor':
                    $this->selectedVendor = empty($selectedValue) ? null : $selectedValue;
                    break;
                case 'type':
                    $this->selectedType = empty($selectedValue) ? null : $selectedValue;
                    break;
            }
        }
        $this->resetPage();
    }
}
