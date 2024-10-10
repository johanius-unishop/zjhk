<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ProductTypeProperty;
use App\Models\ProductTypePropertyValues;

class ProductTypeProretyValuesComponent extends Component
{
    public $productTypeProperty;
    public $values;

    public function mount($productTypeProperty)
    {
        $this->productTypeProperty = $productTypeProperty;
        $this->values = ProductTypePropertyValues::where('product_type_property_id' , $this->productTypeProperty ->id)-> get();

    }

    #[On('refresh-products')]
    public function refreshProducts()
    {
        $this->values = ProductTypePropertyValues::where('product_type_property_id' , $this->productTypeProperty ->id)-> get();
    }
    public function render()
    {
        return view('livewire.product-type-prorety-values-component');
    }
}
