<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductsSelect extends Component
{
    use WithPagination;

    public $acceptsWebP;
    public $category;
    public $perPage = 12; // Кол-во товаров на странице
    public $perPageOptions = [12, 24, 36]; // Опции кол-ва товаров
    public $filter;

    public string $layoutType = 'card'; // Тип отображения

    public bool $menuIsOpen = false; // Флаг открытия меню

  /*  public function toggleMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen;
    }

    public function changePerPage($newValue)
    {
        $this->perPage = $newValue;
        $this->menuIsOpen = false;
        $this->resetPage(); // Всегда возвращаемся на первую страницу
    }*/

    public function switchLayout()
    {
        $newLayoutType = $this->layoutType === 'card' ? 'list' : 'card';
        $this->layoutType = $newLayoutType;
        session()->put('layoutType', $newLayoutType);
    }

    public function mount($category, $filter, $acceptsWebP)
    {
        $this->filter = $filter;
        $this->category = $category;
        $this->acceptsWebP = $acceptsWebP;
    }

    public function render()
    {
        // Базовый запрос к продуктам
        $query = Product::select('*')
            ->where('category_id', $this->category->id)
            ->where('published', 1)
            ->orderByRaw("CASE WHEN stock > 0 THEN 0 ELSE 1 END")
            ->orderBy('order_column');

        // Выполняем пагинацию
        $products = $query->with('media')->paginate($this->perPage)->withQueryString();

        return view('livewire.front.products-select', compact('products'));
    }
}
