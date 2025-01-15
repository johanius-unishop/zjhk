<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithoutCurrencyComponent extends Component
{
    use LivewireAlert;
    public $productsWithoutCurrency;
    public $currencies;
    public $selectedCurrencies = [];
     

    
    public function mount($productsWithoutCurrency)
    {
        $this->productsWithoutCurrency = $productsWithoutCurrency;
        foreach ($this->productsWithoutCurrency as $product) {
            $this->selectedCurrencies[$product->id] = $product->currency_id;
        }
    }

    public function save()
    {
        foreach ($this->selectedCurrencies as $productId => $currencyId) {
            // Сохранение значений в базе данных
            if ($currencyId !== null) {
                Product::where('id', $productId)
                       ->update(['currency_id' => $currencyId]);
            }
        }
        
        $this->dispatch('toast', message: 'Валюты присвоены товарам.', notify: 'success');
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.product-without-currency-component');
    }
}