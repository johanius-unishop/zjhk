<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class FavouriteComponent extends Component
{
    use LivewireAlert;
    public $items;
    public $cart_total;

    public function removeFromCart($productId): void
    {
        $product        = Product::findOrFail($productId);
        $favourites     = Cart::instance('favourites')->content();
        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();
        Cart::instance('favourites')->remove($desired_object->rowId);
        $this->dispatch('toast', message: 'Товар удален из корзины', notify: 'success');
        // $this->fillCart();
        $this->dispatch('$refresh');
    }


    public function checkout()
    {
        $this->dispatch('toast', message: 'Заказ оформлен', notify: 'success');
    }

    public function clearCart()
    {
        Cart::instance('favourites')->destroy();
        $this->dispatch('toast', message: 'Избранное  очищено', notify: 'success');
        // $this->fillCart();
        $this->dispatch('$refresh');
    }
    public function moveToCart()
    {

        $items = Cart::instance('favourites')->content();

        foreach ($items as $key) {
             $product = Product::findOrFail($key->id);
            Cart::instance('cart')->add($product->id, $product->name, 1, $product->price, 1)->associate(Product::class);

        }

        Cart::instance('favourites')->destroy();
        $this->dispatch('toast', message: 'Корзина очищена', notify: 'success');
        // $this->fillCart();
        $this->dispatch('$refresh');
    }

    public function render()
    {
        $this->cart_total = Cart::instance('favourites')->total();
        return view('livewire.favourites-component', ['cart_items', Cart::instance('favourites')->content()]);
    }
}
