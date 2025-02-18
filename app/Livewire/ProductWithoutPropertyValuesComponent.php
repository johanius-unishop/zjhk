<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ProductWithoutPropertyValuesComponent extends Component
{
    use LivewireAlert;
    public $productWithoutPropertyValues;

    public function mount()
    {
        // Вызываем метод applyFilter для применения фильтров
        $this->applyFilter();
    }

    private function applyFilter()
    {
        // Логика фильтрации остается такой же
        $this->productWithoutPropertyValues = Product::doesntHave('productPropertyValues')->get();
    }

    public function render()
    {
        return view('livewire.product-without-property-values', [
            'productWithoutPropertyValues' => $this->productWithoutPropertyValues,
        ]);
    }
}