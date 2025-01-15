<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\ProductTypeProperty;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductTypePropertyComponent extends Component
{
    use LivewireAlert;
    public string $parent_type;
    
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required')]
    public bool $section = false;
    
    #[Validate('required')]
    public $product_type_id;

    

    
    public function mount($parent_type = null)
    {
        $this->parent_type = $parent_type;   
    }

    public function save()
    {
        $section = $this->section ? 1 : 0;
        $this->product_type_id = $this->parent_type;

        $this->validate();

        ProductTypeProperty::create(
                $this->only(['name', 'section', 'product_type_id'])
            );
        $this->reset('name', 'section');
        $this->dispatch('update-product-type-property-table');
        return;
    }

    protected function messages()
    {
        return [
            'name.required'     => 'Название характеристики должно быть заполнено',
            'name.min'     => 'Название характеристики должно содержать минимум 3 символа',
        ];
    } 

    public function render()
    {
        return view('livewire.product-type-property-component');
    }
}