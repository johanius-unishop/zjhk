<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithoutCategoryComponent extends Component
{
    use LivewireAlert;
    public $productsWithoutCategory;
    public $categories;
    public $selectedCategories = [];
     

    
    public function mount($productsWithoutCategory)
    {
        $this->productsWithoutCategory = $productsWithoutCategory;
        foreach ($this->productsWithoutCategory as $product) {
            $this->selectedCategories[$product->id] = $product->category_id;
        }
    }

    public function save()
    {
        
        foreach ($this->selectedCategories as $productId => $categoryId) {
            // Сохранение значений в базе данных
            if ($categoryId !== null) {
                Product::where('id', $productId)
                       ->update(['category_id' => $categoryId]);
            }
        }
        
        $this->dispatch('toast', message: 'Категории присвоены.', notify: 'success');
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.product-without-category-component');
    }
}