<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithoutTypeComponent extends Component
{
    use LivewireAlert;
    public $productsWithoutType;
    public $productTypes;
    public $selectedTypes = [];
     

    
    public function mount($productsWithoutType  )
    {
        $this->productsWithoutType = $productsWithoutType;
        foreach ($this->productsWithoutType as $product) {
            $this->selectedTypes[$product->id] = $product->product_type_id;
        }
    }

    public function save()
    {
        foreach ($this->selectedTypes as $productId => $typeId) {
            // Сохранение значений в базе данных
            if ($typeId !== null) {
                Product::where('id', $productId)
                       ->update(['product_type_id' => $typeId]);
            }
        }
        
        $this->dispatch('toast', message: 'Типы товаров присвоены.', notify: 'success');
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.product-without-type-component');
    }
}