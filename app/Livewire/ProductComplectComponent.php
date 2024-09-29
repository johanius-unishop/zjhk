<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\ProductTypeProperty;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Modelable;
class ProductComplectComponent extends Component
{

    #[Modelable]
    public $product;

    public function mount(Product $product)
    {
        $product->load('type', 'type.composites', 'type.composites.product');
        $this->product = $product;
        // dd( $this->product );
    }
    public function render()
    {
        return view('livewire.product-complect-component');
    }
}
