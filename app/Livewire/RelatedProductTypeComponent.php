<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\RelatedProductType;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class RelatedProductTypeComponent extends Component
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
        RelatedProductType::create(
                $this->only(['name', 'product_type_id'])
            );
        $this->reset('name');
        $this->dispatch('update-related-product-type-table');       
        return;
    }

    protected function messages()
    {
        return [
            'name.required'     => 'Название совместимого типа товаров должно быть заполнено',
            'name.min'     => 'Название совместимого типа товаров должно содержать минимум 3 символа',
        ];
    } 

    public function render()
    {
        return view('livewire.related-product-type-component');
    }
}