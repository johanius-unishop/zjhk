<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Modelable;
class ProductComplectComponent extends Component
{

    #[Modelable]
    public $record;
    public function render()
    {
        return view('livewire.product-complect-component');
    }
}
