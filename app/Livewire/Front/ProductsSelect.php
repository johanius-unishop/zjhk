<?php
namespace App\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsSelect extends Component
{
    public $category;
    public $perPage = 8; // количество товаров на странице
    public $filter;

    public string $layoutType;

    protected $listeners = [
        'refreshComponent' => '$refresh',
    ];

    public function switchLayout()
    {

        if ($this->layoutType === 'card') {
            $this->layoutType = 'list';
        } else {
            $this->layoutType = 'card';
        }

        // Записываем новый тип макета в сессию
        session(['layoutType' => $this->layoutType]);

        // Оповещаем слушателей об изменении макета
        $this->dispatch('updateLayout', layoutType: $this->layoutType);
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
