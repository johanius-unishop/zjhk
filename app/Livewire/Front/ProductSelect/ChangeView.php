<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class ChangeView extends Component
{
    public string $layoutType = 'card'; // Начальное состояние: список

    public function toggleLayout()
    {
        if ($this->layoutType === 'card') {
            $this->layoutType = 'list';
            $this->dispatch('changeLayout', layoutType: $this->layoutType);
        } else {
            $this->layoutType = 'card';
            $this->dispatch('changeLayout', layoutType: $this->layoutType);
        }
    }

    public function mount($layoutType)
    {
        $this->layoutType = $layoutType;
    }


    public function render()
    {
        return view('livewire.front.product-select.change-view');
    }
}
