<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\ProductCompositeElement;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class ProductCompositeElementsComponent extends Component
{
    use LivewireAlert;
    public $productCompositeTypes = [];
    public $compositeElements = [];
    public $tempCompositeArray=[];
    public $listProducts=[];
    public $selectedElements = [];
    public $quantityElements = [];
    public $addedElementsArray =[];
    public $addedElementImages = [];
    public $addedElementQuantities = [];
    public $addedElements =[];
    
    public $product;
    
    
    
    
    public function mount($product = null)
    {
        $this->product = $product;
        $this->productCompositeTypes = $product->productType->composites->sortBy('order_column');
        //$this->compositeElements = ProductCompositeElement::where('product_id', '=', $product->id)->get();
        //$this->tempCompositeArray = $this->compositeElements->pluck('product_element_id')->toArray();
        $this->tempCompositeArray = ProductCompositeElement::where('product_id', '=', $product->id)->pluck('product_element_id')->toArray();

        //array_push($this->tempCompositeArray, $product->id);
        $this->listProducts = Product::where('composite_product', '!=', '1')
            ->whereNotIn('id', $this->tempCompositeArray)
                               ->orderBy('name')
                               ->pluck('id', 'name')
                               ->toArray();
        $this->selectedElements = [];
        $this->selectedElements = [];
        
        foreach ($this->productCompositeTypes as $type) {
            $this->selectedElements[$type->id] = ''; // Инициализируем каждый элемент массива
            $this->quantityElements[$type->id] = ''; // Инициализируем каждый элемент массива
            
        }
        
        $this->addedElementsArray=[];
        $this->addedElementImages = [];
        foreach ($this->productCompositeTypes as $type) {
            $this->addedElementsArray[$type->id] = ProductCompositeElement::where('product_id', $this->product->id)
                                                        ->where('product_type_composite_element_id', '=', $type->id)
                                                        ->pluck('product_element_id')->toArray();
            $this->addedElements[$type->id] = Product::whereIn('id', $this->addedElementsArray[$type->id])->get();
            foreach ($this->addedElements[$type->id] as $addedElement){
                $this->addedElementImages[$addedElement->id] = $addedElement->getMedia('images')
                                            ->sortBy('order_column')
                                            ->first();
                $this->addedElementQuantities[$addedElement->id] = ProductCompositeElement::where('product_id', $this->product->id)
                    ->where('product_type_composite_element_id', '=', $type->id)
                    ->where('product_element_id', '=', $addedElement->id)->first()->quantity;                                          
            }
        }
    }

    public function handleClick($productTypeCompositeElementId)
    {
        if (
            isset($this->selectedElements[$productTypeCompositeElementId]) &&
            $this->selectedElements[$productTypeCompositeElementId] != '' &&
            isset($this->quantityElements[$productTypeCompositeElementId]) &&
            is_int(intval($this->quantityElements[$productTypeCompositeElementId])) &&
            $this->quantityElements[$productTypeCompositeElementId] > 0
        ) {
            
            $element = ProductCompositeElement::create([
                'product_id' => $this->product->id,
                'product_type_composite_element_id' => $productTypeCompositeElementId,
                'product_element_id' => $this->selectedElements[$productTypeCompositeElementId],
                'quantity' => $this->quantityElements[$productTypeCompositeElementId],
            ]);

            $this->productCompositeTypes = $this->product->productType->composites->sortBy('order_column');
            //$this->compositeElements = ProductCompositeElement::where('product_id', '=', $this->product->id)->get();
            //$this->tempCompositeArray = $this->compositeElements->pluck('product_element_id')->toArray();
            $this->tempCompositeArray = ProductCompositeElement::where('product_id', '=', $this->product->id)->pluck('product_element_id')->toArray();

            //array_push($this->tempCompositeArray, $product->id);
            $this->listProducts = Product::where('composite_product', '!=', '1')
                ->whereNotIn('id', $this->tempCompositeArray)
                ->orderBy('name')
                ->pluck('id', 'name')
                ->toArray();
            $this->selectedElements = [];
            $this->quantityElements = [];

            foreach ($this->productCompositeTypes as $type) {
                $this->selectedElements[$type->id] = ''; // Инициализируем каждый элемент массива
                $this->quantityElements[$type->id] = ''; // Инициализируем каждый элемент массива
            }

            $this->addedElementsArray = [];
            $this->addedElementImages = [];
            foreach ($this->productCompositeTypes as $type) {
                $this->addedElementsArray[$type->id] = ProductCompositeElement::where('product_id', $this->product->id)
                    ->where('product_type_composite_element_id', '=', $type->id)
                    ->pluck('product_element_id')->toArray();
                $this->addedElements[$type->id] = Product::whereIn('id', $this->addedElementsArray[$type->id])->get();
                foreach ($this->addedElements[$type->id] as $addedElement) {
                    $this->addedElementImages[$addedElement->id] = $addedElement->getMedia('images')
                        ->sortBy('order_column')
                        ->first();
                    $this->addedElementQuantities[$addedElement->id] = ProductCompositeElement::where('product_id', $this->product->id)
                        ->where('product_type_composite_element_id', '=', $type->id)
                        ->where('product_element_id', '=', $addedElement->id)->first()->quantity;
                }
            }

            $this->dispatch('$refresh');
            $this->dispatch('toast', message: 'Товар добавлен в комплект!', notify: 'success');
        } else {
            if ($this->selectedElements[$productTypeCompositeElementId] == '') {
                $this->dispatch('toast', message: 'Необходимо выбрать товар!', notify: 'error');
            } elseif (!is_int(intval($this->quantityElements[$productTypeCompositeElementId])) || $this->quantityElements[$productTypeCompositeElementId] <= 0) {
                $this->dispatch('toast', message: 'Количество должно быть целым положительным числом!', notify: 'error');
            }
            return;
        }
    }

    public function delete($addedElementId)
    {
        ProductCompositeElement::where('product_id', $this->product->id)
            ->where('product_element_id', $addedElementId)
            ->delete();

              
            $this->productCompositeTypes = $this->product->productType->composites->sortBy('order_column');
            //$this->compositeElements = ProductCompositeElement::where('product_id', '=', $this->product->id)->get();
            //$this->tempCompositeArray = $this->compositeElements->pluck('product_element_id')->toArray();
            $this->tempCompositeArray = ProductCompositeElement::where('product_id', '=', $this->product->id)->pluck('product_element_id')->toArray();

            //array_push($this->tempCompositeArray, $product->id);
            $this->listProducts = Product::where('composite_product', '!=', '1')
                ->whereNotIn('id', $this->tempCompositeArray)
                                ->orderBy('name')
                                ->pluck('id', 'name')
                                ->toArray();
            $this->selectedElements = [];
            $this->quantityElements = [];
                    
            foreach ($this->productCompositeTypes as $type) {
                $this->selectedElements[$type->id] = ''; // Инициализируем каждый элемент массива
                $this->quantityElements[$type->id] = ''; // Инициализируем каждый элемент массива
            }
            
            $this->addedElementsArray=[];
            $this->addedElementImages = [];
            foreach ($this->productCompositeTypes as $type) {
                $this->addedElementsArray[$type->id] = ProductCompositeElement::where('product_id', $this->product->id)
                                                            ->where('product_type_composite_element_id', '=', $type->id)
                                                            ->pluck('product_element_id')->toArray();
                $this->addedElements[$type->id] = Product::whereIn('id', $this->addedElementsArray[$type->id])->get();
                foreach ($this->addedElements[$type->id] as $addedElement){
                    $this->addedElementImages[$addedElement->id] = $addedElement->getMedia('images')
                                                ->sortBy('order_column')
                                                ->first();
                    $this->addedElementQuantities[$addedElement->id] = ProductCompositeElement::where('product_id', $this->product->id)
                                                ->where('product_type_composite_element_id', '=', $type->id)
                                                ->where('product_element_id', '=', $addedElement->id)->first()->quantity;
                }
            }
            $this->dispatch('toast', message: 'Товар удален из комплекта!', notify: 'warning');
            $this->dispatch('$refresh');

    }

    public function render()
    {
        return view('livewire.product-composite-elements-component');
    }
        
}