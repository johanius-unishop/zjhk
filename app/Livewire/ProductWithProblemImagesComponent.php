<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductWithProblemImagesComponent extends Component
{
    use LivewireAlert;
    public $productWithProblemImages;
    public $selectedOption;
    public $inStock;
     

    
    public function mount()
    {
        $this->selectedOption = 0;
        $this->inStock = 0;
        $this->productWithProblemImages = Product::doesntHave('media', 'and', function ($query) {
            $query->where('collection_name', 'images');
        })->get();
    }

    public function accept_filter()
    {
        if ($this->selectedOption === null || $this->selectedOption < 0) {
            $this->alert('error', 'Необходимо выбрать корректную опцию.');
            return;
        }

        $query = Product::query();

        if ($this->inStock) {
            $query->where('stock', '>', 0);
        }

        if ($this->selectedOption == 0) {
            $query->doesntHave('media', 'and', function ($query) {
                $query->where('collection_name', 'images');
            });
        } else {
            $query->withCount([
                'media as image_count' => function ($query) {
                    $query->where('collection_name', 'images');
                },
            ])->havingRaw("image_count = ?", [$this->selectedOption]);
        }

        $this->productWithProblemImages = $query->get();

        $this->dispatch('toast', message: 'Фильтр применен', notify: 'success');
    }

        

    public function render()
    {
        return view('livewire.product-with-problem-images', [
            'productWithProblemImages' => $this->productWithProblemImages,
        ]);
    }

}