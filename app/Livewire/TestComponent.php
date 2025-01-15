<?php

namespace App\Livewire;

use App\Models\ProductType;
use App\Models\ProductPropertyValue;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class TestComponent extends Component
{
    use LivewireAlert;
    public $isDisabled = false;
    public $record = '';
    public $product;
    public $properties;
    public $productType;
    public $selectedValues = []; // Массив для хранения выбранных значений

      public function mount($record = null)
    {
        $this->product = $record;
        $this->record  = $record;
        $this->productType = ProductType::where('id', $this->record->product_type_id)
        ->with('properties.productTypePropertyValues')
        ->first();

        foreach ($this->productType->properties as $property) {
            $defaultValue = $this->product->productPropertyValues
                              ->where('product_type_property_id', $property->id)
                              ->first()?->product_type_property_value_id;
            $this->selectedValues[$property->id] = $defaultValue;
        }

        
        
    }
    public function render()
    {
        $this->productType = ProductType::where('id', $this->record->product_type_id)
                                    ->with('properties.productTypePropertyValues')
                                    ->first();

        return view('livewire.test-component', ['productType' =>  $this->productType ] );
    }

    /*public function updatedSelectedValues($propertyId, $value)
    {
        dump("Updated property ID: {$propertyId}, new value: {$value}");
        $this->selectedValues['prop_' . $propertyId] = $value;
    }*/

    public function save()
    {
        //dd($this->selectedValues);
        foreach ($this->selectedValues as $key => $value) {
            // Сохранение значений в базе данных
            if ($value !== null){
            ProductPropertyValue::updateOrCreate(
                ['product_id' => $this->record->id, 'product_type_property_id' => $key],
                ['product_type_property_value_id' => $value]
            );
            }
        }
        
        $this->dispatch('toast', message: 'Технические характеристики обновлены.', notify: 'success');
        
    }
}
