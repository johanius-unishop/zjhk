<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsSelect extends Component
{
    public $category;
    public $perPage = 8; // количество товаров на странице
    public $perPageOptions = [8, 12, 16, 20, 24];
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
        $this->dispatch('$refresh');
    }

    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    public function switchLayout()
    {
        $this->layoutType = $this->layoutType === 'card' ? 'list' : 'card';

        // Оповещаем слушателей об изменении макета
        $this->dispatch('updateLayout', layoutType: $this->layoutType);
        $this->dispatch('$refresh');
    }

    public function mount($category, $filter)
    {
        $this->filter = $filter;
        $this->layoutType = session('layoutType', 'card'); // По умолчанию "card"
        $this->category = $category;
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
