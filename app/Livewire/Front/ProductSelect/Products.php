<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class Products extends Component
{
    public array $elements = [];
    public $layoutType = 'card';


    public function mount($elements)
    {
        $this->elements = $elements;
    }
    // Приложение слушателя в принимающем компоненте
    protected $listeners = [
        'changeLayout' => 'handleChangeLayout',
    ];

    // Метод-обработчик события
    public function handleChangeLayout($layoutType)
    {
        $this->layoutType = $layoutType;
    }


    public function render()
    {
        return view('livewire.front.product-select.products');
    }
}
