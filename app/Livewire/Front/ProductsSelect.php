<?php

namespace App\Livewire\Front;

use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsSelect extends Component
{
    use WithPagination;

    public $acceptsWebP;
    public $category;
    public $perPage = 12; // количество товаров на странице
    public $perPageOptions = [12, 24, 36];
    public $filter;

    public string $layoutType = 'card';

    public bool $menuIsOpen = false; // Изначально меню закрыто

    public function toggleMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen; // Инвертируем состояние
    }


    public function changePerPage($newValue)
    {
        $this->perPage = $newValue;
        $this->menuIsOpen = false; // Закрываем меню
        $this->resetPage();
    }


    public function switchLayout()
    {
        $newLayoutType = $this->layoutType === 'card' ? 'list' : 'card';
        $this->layoutType = $newLayoutType;
        session(['layoutType' => $newLayoutType]);
    }

    public function mount($category, $filter, $acceptsWebP)
    {
        $this->filter = $filter;
        $this->category = $category;
        $this->acceptsWebP = $acceptsWebP;
        $this->layoutType = session('layoutType', 'card'); // По умолчанию "card"
    }

    public function render()
    {
        // Основной запрос по товарам
        $query = Product::select('*')
            ->where('category_id', $this->category->id)
            ->where('published', 1)
            ->orderByRaw("CASE WHEN stock > 0 THEN 0 ELSE 1 END") // сначала положительные остатки
            ->orderBy('order_column');

        // Выполняем пагинацию и подтягиваем медиа-данные
        $products = $query->with('media')->paginate($this->perPage)->withQueryString();

        return view('livewire.front.products-select', compact('products'));
    }
}
