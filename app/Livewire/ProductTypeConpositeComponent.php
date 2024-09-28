<?php

namespace App\Livewire;

use App\Models\ProductTypeProperty;
use App\Models\ProductType;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Log;
class ProductTypeConpositeComponent extends Component
{


    use LivewireAlert;
    public string $parent_category_id;
    public $delete_id;
    public $property_id;
    public $composites;


    public function mount($parent_category = null)
    {
    //    dd( $parent_category );
        $this->parent_category_id = $parent_category;
        $this->productType        = ProductType::where('id', $this->parent_category_id)->with('composites')->first();
        $this->composites         = $this->productType->composites;
        // foreach ($this->props as $prop) {
        //     $this->property_show[$prop->id] = false;
        //     $this->property_test[$prop->id]      = " Пусто ";
        // }
//    dd($this->composites);
    }





    public function render()
    {
        return view('livewire.product-type-conposite-component');
    }
}
