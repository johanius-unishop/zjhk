<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class Products extends Component
{
    public array $elements = [];


    public function mount($elements)
    {
        $this->elements = $elements;
    }


    public function render()
    {
        return view('livewire.front.product-select.products');
    }
}
