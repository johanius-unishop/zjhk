<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\RelatedProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductRelatedProductsComponent extends Component
{
    use LivewireAlert;
    public $selectedProducts = [];
    public $addedProductsArray =[];
    public $addedProducts =[];
    public $productRelatedTypes = [];
    public $relatedProducts = [];
    public $product;
    public $arrayProducts;
    public $tempArray=[]; 
    public $addedProductImages = [];
    
    public function mount($product = null)
    {
        $this->product = $product;
        $this->productRelatedTypes = $product->productType->relatedTypes->sortBy('order_column');
        $this->relatedProducts = RelatedProduct::where('product_id', '=', $product->id)->get();
        $this->tempArray = $this->relatedProducts->pluck('id_product')->toArray();
        array_push($this->tempArray, $product->id);
        $this->arrayProducts = Product::whereNotIn('id', $this->tempArray)
                               ->orderBy('name')
                               ->pluck('id', 'name')
                               ->toArray();
        $this->selectedProducts = [];
        
        foreach ($this->productRelatedTypes as $type) {
            $this->selectedProducts[$type->id] = ''; // Инициализируем каждый элемент массива
            
        }
        
        $this->addedProductsArray=[];
        $this->addedProductImages = [];
        foreach ($this->productRelatedTypes as $type) {
            $this->addedProductsArray[$type->id] = RelatedProduct::where('product_id', $this->product->id)
                                                        ->where('related_product_type_id', '=', $type->id)
                                                        ->pluck('id_product')->toArray();
            $this->addedProducts[$type->id] = Product::whereIn('id', $this->addedProductsArray[$type->id])->get();
            foreach ($this->addedProducts[$type->id] as $addedProduct){
                $this->addedProductImages[$addedProduct->id] = $addedProduct->getMedia('images')
                                            ->sortBy('order_column')
                                            ->first();
            }
        }
        
    }

    public function handleClick($relatedProductTypeId)
    {
        if ($this->selectedProducts[$relatedProductTypeId]!='')
        {
            $relatedProduct = RelatedProduct::create([
                'product_id' => $this->product->id,
                'related_product_type_id' => $relatedProductTypeId,
                'id_product' => $this->selectedProducts[$relatedProductTypeId],
                'comment_1' => '',
                'comment_2' => '',
                'comment_3' => '',
            ]);
            $this->productRelatedTypes = $this->product->productType->relatedTypes->sortBy('order_column');
            $this->relatedProducts = RelatedProduct::where('product_id', '=', $this->product->id)->get();
            $this->tempArray = $this->relatedProducts->pluck('id_product')->toArray();
            array_push($this->tempArray, $this->product->id);
            $this->arrayProducts = Product::whereNotIn('id', $this->tempArray)
                                ->orderBy('name')
                                ->pluck('id', 'name')
                                ->toArray();
            $this->selectedProducts = [];
        
            foreach ($this->productRelatedTypes as $type) {
                $this->selectedProducts[$type->id] = ''; // Инициализируем каждый элемент массива                    
            }
                                
            $this->addedProductsArray=[];
            $this->addedProductImages = [];
            foreach ($this->productRelatedTypes as $type) {
                $this->addedProductsArray[$type->id] = RelatedProduct::where('product_id', $this->product->id)
                    ->where('related_product_type_id', '=', $type->id)
                    ->pluck('id_product')->toArray();
                $this->addedProducts[$type->id] = Product::whereIn('id', $this->addedProductsArray[$type->id])->get();
                foreach ($this->addedProducts[$type->id] as $addedProduct){
                    $this->addedProductImages[$addedProduct->id] = $addedProduct->getMedia('images')
                        ->sortBy('order_column')
                        ->first();
                }
            }

            $this->dispatch('$refresh');
            $this->dispatch('toast', message: 'Товар добавлен в группу!', notify: 'success');
        }
        else{
            $this->dispatch('toast', message: 'Нужно выбрать товар!', notify: 'error');
            return;
        }
    }

    public function delete($addedProductId)
    {
        RelatedProduct::where('product_id', $this->product->id)
            ->where('id_product', $addedProductId)
            ->delete();

              
            $this->productRelatedTypes = $this->product->productType->relatedTypes->sortBy('order_column');
            $this->relatedProducts = RelatedProduct::where('product_id', '=', $this->product->id)->get();
            $this->tempArray = $this->relatedProducts->pluck('id_product')->toArray();
            array_push($this->tempArray, $this->product->id);
            $this->arrayProducts = Product::whereNotIn('id', $this->tempArray)
                ->orderBy('name')
                ->pluck('id', 'name')
                ->toArray();
            $this->selectedProducts = [];
                foreach ($this->productRelatedTypes as $type) {
                    $this->selectedProducts[$type->id] = ''; // Инициализируем каждый элемент массива                    
                }                                         
            $this->addedProductsArray=[];
            $this->addedProductImages = [];
            foreach ($this->productRelatedTypes as $type) {
                $this->addedProductsArray[$type->id] = RelatedProduct::where('product_id', $this->product->id)
                    ->where('related_product_type_id', '=', $type->id)
                    ->pluck('id_product')->toArray();
                $this->addedProducts[$type->id] = Product::whereIn('id', $this->addedProductsArray[$type->id])->get();
                foreach ($this->addedProducts[$type->id] as $addedProduct){
                $this->addedProductImages[$addedProduct->id] = $addedProduct->getMedia('images')
                    ->sortBy('order_column')
                    ->first();
                }
            }

              $this->dispatch('$refresh');

    }

    public function render()
    {
        return view('livewire.product-related-products-component');
    }
        
}