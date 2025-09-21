<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class SearchResult extends Component
{
    public $search = '';   // Поле ввода поиска
    public $searchResults; // Результаты поиска
    public $visible = false; // Видимость результатов

    public function render()
    {
        if (strlen(trim($this->search)) > 2) {
            $this->visible = true;
            $scoutBuilder = Product::search($this->search, ['rankingScoreThreshold' => 1.0]);
            $this->searchResults = $scoutBuilder->get();

        } else {
            $this->visible = false;
            $this->searchResults = collect([]);
        }

        return view('livewire.front.search-result');
    }
}
