<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsSelect extends Component
{
    use WithPagination;

    public $acceptsWebP;
    public $category;
    public $perPage = 12; // Количество товаров на странице
    public $perPageOptions = [12, 24, 36]; // Доступные варианты отображаемых товаров
    public $filter;

    public string $layoutType = 'card'; // Тип отображения товаров (карточки / список)

    public bool $menuIsOpen = false; // Меню открыто/закрыто

    public function toggleMenu()
    {
        $this->menuIsOpen = !$this->menuIsOpen; // Переключаем состояние меню
    }

    /**
     * Изменяем количество записей на странице
     */
    public function changePerPage($newValue)
    {
        $this->perPage = $newValue; // Устанавливаем новое значение
        $this->menuIsOpen = false; // Закрываем меню после смены размера страницы
        $this->gotoPage(1); // Перезапускаем пагинацию заново
    }

    /**
     * Переключаем тип отображения товаров
     */
    public function switchLayout()
    {
        $newLayoutType = $this->layoutType === 'card' ? 'list' : 'card';
        $this->layoutType = $newLayoutType;
        session()->put('layoutType', $newLayoutType); // Сохраняем тип отображения в сессии
    }

    /**
     * Метод монтирования компонента
     */
    public function mount($category, $filter, $acceptsWebP)
    {
        $this->filter = $filter;
        $this->category = $category;
        $this->acceptsWebP = $acceptsWebP;
    }

    /**
     * Рендеринг компонента
     */
    public function render()
    {
        // Запрашиваем товары по категории
        $query = Product::select('*')
            ->where('category_id', $this->category->id)
            ->where('published', 1)
            ->orderByRaw("CASE WHEN stock > 0 THEN 0 ELSE 1 END")
            ->orderBy('order_column');

        // Применяем пагинацию
        $products = $query->with('media')->paginate($this->perPage)->withQueryString();

        return view('livewire.front.products-select', compact('products'));
    }
}
