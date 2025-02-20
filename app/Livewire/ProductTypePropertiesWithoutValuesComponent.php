<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProductTypeProperty;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ProductTypePropertiesWithoutValuesComponent extends Component
{
    use LivewireAlert;
    public $productTypePropertiesWithoutValues;

    public function mount()
    {
        // Вызываем метод applyFilter для применения фильтров
        $this->applyFilter();
    }

    private function applyFilter()
    {
        // Логика фильтрации остается такой же
        $this->productTypePropertiesWithoutValues = ProductTypeProperty::doesntHave('productTypePropertyValues')
            ->where('section', '0')
            ->get();
    }

    public function render()
    {
        return view('livewire.product-type-properties-without-values', [
            'productTypePropertiesWithoutValues' => $this->productTypePropertiesWithoutValues,
        ]);
    }
}