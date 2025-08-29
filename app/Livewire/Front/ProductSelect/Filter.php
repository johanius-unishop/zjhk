<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class Filter extends Component
{
    public $filter;

    public function mount($filter)
    {
        $this->filter = $filter;
        dd($filter);
    }

    public function render()
    {
        return view('livewire.front.product-select.filter');
    }
}
