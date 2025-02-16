<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ProductWithoutModelComponent extends Component
{
    use LivewireAlert;
    public $productWithoutModel;

    public function mount()
    {
        // Вызываем метод applyFilter для применения фильтров
        $this->applyFilter();
    }

    private function applyFilter()
    {
        // Логика фильтрации остается такой же, как у вас
        $query = Product::query();

        $query->where('composite_product', '0');

        $query->doesntHave('media', 'and', function ($query) {
                $query->where('collection_name', '3dModel');
            });

        $this->productWithoutModel = $query->get();
    }

    public function render()
    {
        return view('livewire.product-without-model', [
            'productWithoutModel' => $this->productWithoutModel,
        ]);
    }
}