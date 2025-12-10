<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;

class Articles extends Component
{
    use WithPagination;

    public $acceptsWebP;

    public $perPage = 12; // Кол-во товаров на странице
    public $perPageOptions = [12, 24, 36]; // Опции кол-ва товаров



    public bool $menuIsOpen = false; // Флаг открытия меню

    public function toggleMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen;
    }

    public function changePerPage($newValue)
    {
        $this->perPage = $newValue;
        $this->menuIsOpen = false;
        $this->resetPage(); // Всегда возвращаемся на первую страницу
    }

    public function mount($acceptsWebP)
    {
        $this->acceptsWebP = $acceptsWebP;
    }

    public function render()
    {
        // Базовый запрос к брендам
        $query = Article::published()->orderBy('order_column', 'asc');

        // Выполняем пагинацию
        $articles = $query->with('media')->paginate($this->perPage)->withQueryString();

        $this->dispatch('update-articles');

        return view('livewire.front.articles', compact('articles'));
    }
}
