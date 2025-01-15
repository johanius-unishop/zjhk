<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithoutVendorComponent extends Component
{
    use LivewireAlert;
    public $productsWithoutVendor;
    public $vendors;
    public $selectedVendors = [];
     

    
    public function mount($productsWithoutVendor  )
    {
        $this->productsWithoutVendor = $productsWithoutVendor;
        foreach ($this->productsWithoutVendor as $product) {
            $this->selectedVendors[$product->id] = $product->vendor_id;
        }
    }

    public function save()
    {
        foreach ($this->selectedVendors as $productId => $vendorId) {
            // Сохранение значений в базе данных
            if ($vendorId !== null) {
                Product::where('id', $productId)
                       ->update(['vendor_id' => $vendorId]);
            }
        }
        
        $this->dispatch('toast', message: 'Производители назначенные товарам сохранены.', notify: 'success');
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.product-without-vendor-component');
    }
}