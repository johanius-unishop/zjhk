<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class SearchResult extends Component
{
    /** @var string Поле ввода поиска */
    public $search = '';

    /** @var Collection|null Результаты поиска */
    public $searchResults;

    /** @var bool Видимость результатов */
    public $visible = false;

    public function render()
    {
        // Подготовим строку поиска, удалив ненужные символы
        $cleanedSearch = trim(str_replace([' ', '-', '(', ')'], '', $this->search));

        // Проверяем длину очищенной строки
        if (mb_strlen($cleanedSearch) >= 3) {
            $this->visible = true;
            $scoutBuilder = Product::search($cleanedSearch);
            $this->searchResults = $scoutBuilder->get();
        } else {
            $this->visible = false;
            $this->searchResults = collect([]);
        }

        return view('livewire.front.search-result');
    }
}
