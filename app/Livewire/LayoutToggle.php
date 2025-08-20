<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LayoutToggle extends Component
{
    public string $layoutType = 'list'; // Начальное состояние: список

    public function toggleLayout()
    {
        if ($this->layoutType === 'list') {
            $this->layoutType = 'card';
        } else {
            $this->layoutType = 'list';
        }
    }

    public function render()
    {
        return view('livewire.layout-toggle-component');
    }
}
