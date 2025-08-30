<?php
namespace App\Livewire\Front;

use Livewire\Component;

class ProductsSelect extends Component
{
    public $filter;

    public array $elements = [];

    public function mount($elements, $filter)
    {
        $this->filter = $filter;
        $this->elements = $elements;
    }

    public function render()
    {
        return view('livewire.front.products-select');
    }
}
