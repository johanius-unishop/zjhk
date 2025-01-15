<?php

namespace App\Livewire;

use App\Models\ProductTypeProperty;
use Livewire\Attributes\Validate;
use App\Models\ProductType;
use App\Models\ProductTypeCompositeElement;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Log;
class ProductTypeCompositeComponent extends Component
{

    use LivewireAlert;
    public string $parent_type;
    
    #[Validate('required|min:3')]
    public $name = '';
       
    #[Validate('required')]
    public $product_type_id;
    

    public function mount($parent_type = null)
    {
        $this->parent_type = $parent_type;
    }

    public function save()
    {
        $this->product_type_id = $this->parent_type;

        $this->validate();

        ProductTypeCompositeElement::create(
                $this->only(['name', 'product_type_id'])
            );
        $this->reset('name');
        $this->dispatch('update-product-type-composite-table');       
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
        return view('livewire.product-type-composite-component');
    }
}