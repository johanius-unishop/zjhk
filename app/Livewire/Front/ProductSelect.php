<?php

namespace App\Livewire\Front;

use Livewire\Component;

class ProductSelect extends Component
{
    public string $layoutType = 'list'; // Начальное состояние: список
    public array $elements = [];

    public function toggleLayout()
    {
        if ($this->layoutType === 'list') {
            $this->layoutType = 'card';
        } else {
            $this->layoutType = 'list';
        }
    }

    public function mount($elements, $layoutType)
    {
        $this->elements = $elements;
        $this->layoutType = $layoutType;
    }


    public function render()
    {
        return view('livewire.product-select-component');
    }
}
