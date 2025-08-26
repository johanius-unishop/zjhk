<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class Products extends Component
{
    public array $elements = [];
    public $layoutType = 'card';


    public function mount($elements, $layoutType)
    {
        $this->elements = $elements;
        $this->layoutType  = $layoutType ;

    }



    public function render()
    {
        return view('livewire.front.product-select.products');
    }
}
