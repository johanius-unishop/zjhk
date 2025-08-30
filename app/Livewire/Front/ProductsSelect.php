<?php
namespace App\Livewire\Front;

use Livewire\Component;

class ProductsSelect extends Component
{
    public $filter;

    public string $layoutType;

    public array $elements = [];

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
        $this->dispatch('updateLayout', layoutType: $this->layoutType);
    }

    public function mount($elements, $filter)
    {
        $this->filter = $filter;
        $this->layoutType = session('layoutType', 'card'); // По умолчанию "card"
        $this->elements = $elements;
    }

    public function render()
    {
        return view('livewire.front.products-select');
    }
}
