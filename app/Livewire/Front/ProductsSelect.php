<?php
namespace App\Livewire\Front;

use Livewire\Component;

class ProductsSelect extends Component
{
    public array $elements = [];

    public function mount($elements)
    {
        $this->elements = $elements;
    }

    public function render()
    {
        return view('livewire.front.products-select');
    }
}
