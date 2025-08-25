<?php

namespace App\Livewire\Front\ProductSelect;

use Livewire\Component;

class ChangeView extends Component
{
    public string $layoutType;

    public function switchLayout()
    {
        if ($this->layoutType === 'card') {
            $this->layoutType = 'list';
        } else {
            $this->layoutType = 'card';
        }

        // Записываем новый тип макета в сессию
        session(['layoutType' => $this->layoutType]);

        // Оповещаем слушателей об изменении макета
        $this->dispatch('changeLayout', layoutType: $this->layoutType);
    }

    public function mount()
    {
        // Устанавливаем начальное значение макета из сессии
        $this->layoutType = session('layoutType', 'card'); // По умолчанию "card"
    }

    public function render()
    {
        return view('livewire.front.product-select.change-view');
    }
}
