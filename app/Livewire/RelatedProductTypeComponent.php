<?php

namespace App\Livewire;

use Livewire\Component;

class RelatedProductTypeComponent extends Component
{

    public string $parent_category;
    public $delete_id;
    public $property_id;
    public function render()
    {
        return view('livewire.related-product-type-component');
    }
}
