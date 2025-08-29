<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class Filter extends Component
{
    public string $filter;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.front.product-select.filter');
    }
}
