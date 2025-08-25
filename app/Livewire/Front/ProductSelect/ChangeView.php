<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class ChangeView extends Component
{
    public string $layoutType;

    public function toggleLayout()
    {
        if ($this->layoutType === 'card') {
            $this->layoutType = 'list';
            $this->dispatch('changeLayout', layoutType: $this->layoutType);
        } else {
            $this->layoutType = 'card';
            $this->dispatch('changeLayout', layoutType: $this->layoutType);
        }
        session(['layout_type' => $this->layoutType]); // Запись в сессию
    }

    public function mount($layoutType)
    {
        $this->layoutType = $layoutType;
        $this->layoutType = session('layout_type', 'card'); // По умолчанию "card"
    }


    public function render()
    {
        return view('livewire.front.product-select.change-view');
    }
}
