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

    public $acceptsWebP = false;

    public function render()
    {
        // Подготовим строку поиска, удалив ненужные символы
        $cleanedSearch = trim(str_replace([' ', '-', '(', ')'], '', $this->search));

        $this->acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;
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
