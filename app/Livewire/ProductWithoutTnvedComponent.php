<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithoutTnvedComponent extends Component
{
    use LivewireAlert;
    public $productsWithoutTnved;
    public $tnved = [];
     

    
    public function mount($productsWithoutTnved)
    {
        $this->productsWithoutTnved = $productsWithoutTnved;
        foreach ($this->productsWithoutTnved as $product) {
            $this->tnved[$product->id] = $product->tn_ved;
        }
    }

        public function save()
        { 
            $data = array_filter($this->tnved, fn($val) => !empty(trim($val)));
            
            foreach ($data as $productId => $tn_ved) {
                // Сохранение значений в базе данных
                if ($tn_ved !== null or $tn_ved == "") {
                    Product::where('id', $productId)
                        ->update(['tn_ved' => trim($tn_ved)]);
                }
            }
            
            $this->dispatch('toast', message: 'ТН ВЭД товарам присвоены.', notify: 'success');
            return redirect()->route('admin.dashboard');
        }

        

    public function render()
    {
        return view('livewire.product-without-tnved-component');
    }
}