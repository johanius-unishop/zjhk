<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class SearchResult extends Component
{
    public $search = 'HA-003-M';   // Поле ввода поиска
    public $searchResults; // Результаты поиска
    public $visible = false; // Видимость результатов

    public function render()
    {
        // Проверяем длину очищенного поискового запроса
        if (strlen(trim($this->search)) > 2) {
            $this->visible = true;
            $this->searchResults = Product::search($this->search)->get();
        } else {
            $this->visible = false;
            $this->searchResults = null;
        }

        return view('livewire.front.search-result');
    }
}
