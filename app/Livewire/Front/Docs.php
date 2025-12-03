<?php

namespace App\Livewire\Front;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Documentation;

class Docs extends Component
{
    use WithPagination;

    public $acceptsWebP;
    public $perPage = 12; // Кол-во товаров на странице
    public $perPageOptions = [12, 24, 36]; // Опции кол-ва товаров


    public string $layoutType = 'card'; // Тип отображения

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

    public function switchLayout()
    {
        $newLayoutType = $this->layoutType === 'card' ? 'list' : 'card';
        $this->layoutType = $newLayoutType;
        session()->put('layoutType', $newLayoutType);
    }

    public function mount($acceptsWebP)
    {
        $this->acceptsWebP = $acceptsWebP;
    }

    public function render()
    {
        // Базовый запрос к продуктам
        $query = Documentation::select('*')
            ->where('category_id', $this->category->id)
            ->where('published', 1)
            ->orderByRaw("CASE WHEN stock > 0 THEN 0 ELSE 1 END")
            ->orderBy('order_column');

        // Выполняем пагинацию
        $docs = $query->with('media')->paginate($this->perPage)->withQueryString();

        return view('livewire.front.documentations', compact('docs'));
    }



}
