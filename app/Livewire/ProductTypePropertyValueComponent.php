<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ProductTypeProperty;
use App\Models\ProductTypePropertyValue;
use Livewire\Attributes\Validate;


class ProductTypePropertyValueComponent extends Component
{
    public string $parent_property;
    
    #[Validate('required')]
    public $value = '';
    
    #[Validate('required')]
    public $product_type_property_id;

    public function mount($parent_property = null)
    {
        $this->parent_property = $parent_property;   
    }

   
    
    public function save()
    {
        // Применяем trim к значению
        $this->value = trim($this->value);
        
        $this->product_type_property_id = $this->parent_property;
        $this->validate();
        
        ProductTypePropertyValue::create([
            'value' => $this->value,
            'product_type_property_id' => $this->product_type_property_id
        ]);
        
        $this->reset('value');
        $this->dispatch('update-product-type-property-value-table');
        
        return;
    }

    public function render()
    {
        return view('livewire.product-type-property-value-component');
    }
}
