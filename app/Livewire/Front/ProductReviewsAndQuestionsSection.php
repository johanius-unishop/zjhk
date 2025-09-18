<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Product;

class ProductReviewsAndQuestionsSection extends Component
{

    public $acceptsWebP;
    public $product;
    public $type = 'reviews';
    public $reviewsSort = 'new';
    public $withPhoto = false;
    public $openAnswerReviews = [];


    public function setType(string $newType)
    {
        $this->type = $newType;
    }

    public function setSort(string $newReviewsSort)
    {
        $this->reviewsSort = $newReviewsSort;
    }

    protected $listeners = [
        'forceRefresh' => '$refresh'
    ];

    public function forceRefresh()
    {
        // Можно оставить тело метода пустым,
        // само присутствие метода активирует принудительный рефреш
    }
    /*

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
        foreach ($this->product->reviews as $review) { // Используем нормальный цикл
            $this->openAnswerReviews[$review->id] = false; // Присваиваем индексу review->id значение false
        }
    }

    public function openReply($reviewId)
    {
        foreach ($this->openAnswerReviews as &$review) {
            if ($review['id'] === $reviewId) {
                $review['isOpen'] = !$review['isOpen']; // Переключаем состояние
            }
        }
    }

    public function render()
    {
        $product = $this->product;
        $allReviewsImages = $product->getAllReviewImages();
        $reviewData = $product->getReviewStatsAttribute();
        $starReviewCount = $product->getStarReviewsCount();

        $reviews = null;
        // Получаем коллекцию отзывов исходя из выбранного режима сортировки
        switch ($this->reviewsSort) {
            case 'new':
                $reviews = $product->reviews()
                    ->when($this->withPhoto, fn($q) => $q->has('media')) // добавляем условие наличия фотографий
                    ->orderBy('created_at', 'desc')
                    ->with(['media', 'user'])
                    ->get();
                break;

            case 'hiRating':
                $reviews = $product->reviews()
                    ->when($this->withPhoto, fn($q) => $q->has('media'))
                    ->orderBy('rating', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->with(['media', 'user'])
                    ->get();
                break;

            default:
                $reviews = $product->reviews()
                    ->when($this->withPhoto, fn($q) => $q->has('media'))
                    ->with(['media', 'user'])
                    ->get();
                break;
        }

        return view('livewire.front.product-reviews-and-questions-section', compact('product', 'allReviewsImages', 'reviewData', 'starReviewCount', 'reviews'));
    }
}
