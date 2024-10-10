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
        $this->values              = ProductTypePropertyValues::where('product_type_property_id', $this->productTypeProperty->id)->get();

    }
    public function delete($value_id)
    {
        try {
            $value = ProductTypePropertyValues::find($value_id);
            $value->delete();
            $this->dispatch('toast', message: 'Запись удалена.', notify: 'error');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: ' Не удалось удалить запись.' . $th->getMessage(), notify: 'error');
        }
        $this->dispatch('refresh-products');
    }
    #[On('refresh-products')]
    public function refreshProducts()
    {
        $this->dispatch('toast', message: 'Запись обновлена.', notify: 'status');
        $this->values = ProductTypePropertyValues::where('product_type_property_id', $this->productTypeProperty->id)->get();
    }
    public function render()
    {
        return view('livewire.product-type-prorety-values-component');
    }
}
