<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class Products extends Component
{
    public array $elements = [];
    public $layoutType = 'card';


    public function mount($elements, $layoutType)
    {
        $this->elements = $elements;
        $this->layoutType  = $layoutType ;
        $this->dispatchBrowserEvent('contentChanged');
    }
    // Приложение слушателя в принимающем компоненте
    protected $listeners = [
        'changeLayout' => 'handleChangeLayout',
    ];

    // Метод-обработчик события
    public function handleChangeLayout($layoutType)
    {
        $this->layoutType = $layoutType;

        $this->dispatchBrowserEvent('contentChanged');
    }


    public function render()
    {
        return view('livewire.front.product-select.products');
    }
}
