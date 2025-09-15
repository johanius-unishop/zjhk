<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class ProductReviewsAndQuestionsSection extends Component
{

    public $acceptsWebP;
    public $product;
    /*public $type;
    public $reviews_sort;
    public $only_photo;


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
        $this->layoutType = $this->layoutType === 'card' ? 'list' : 'card';

        // Оповещаем слушателей об изменении макета
        $this->dispatch('updateLayout', layoutType: $this->layoutType);
    }
*/
    public function mount($product, $acceptsWebP)
    {
        $this->product = $product;
        $this->acceptsWebP = $acceptsWebP;
    }

    public function render()
    {
        $product = $this->product;
        /* Основной запрос по товарам
        $query = Product::select('*')
            ->where('category_id', $this->category->id)
            ->where('published', 1)
            ->orderByRaw("CASE WHEN stock > 0 THEN 0 ELSE 1 END") // сначала положительные остатки
            ->orderBy('order_column');

        // Выполняем пагинацию и подтягиваем медиа-данные
        $products = $query->with('media')->paginate($this->perPage)->withQueryString();
        */
        return view('livewire.front.product-reviews-and-questions-section',compact('product'));
    }
}
