<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithoutSupplierPriceComponent extends Component
{
    use LivewireAlert;
    public $productsWithoutSupplierPrice;
     

    
    public function mount($productsWithoutSupplierPrice)
    {
        $this->productsWithoutSupplierPrice = $productsWithoutSupplierPrice;
    }

    public function exit()
    {
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.product-without-supplier-price-component');
    }
}