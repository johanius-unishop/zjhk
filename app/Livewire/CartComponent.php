<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CartComponent extends Component
{
    use LivewireAlert;
    public $items;
    public $cart_total;

    public function removeFromCart($productId): void
    {
        $product        = Product::findOrFail($productId);
        $favourites     = Cart::instance('cart')->content();
        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();
        Cart::instance('cart')->remove($desired_object->rowId);
        $this->dispatch('toast', message: 'Товар удален из корзины', notify: 'success');
        // $this->fillCart();
        $this->dispatch('$refresh');
    }


    public function checkout()
    {
        $this->dispatch('toast', message: 'Заказ оформлен', notify: 'success');
    }
    public function updateQuantity($product_id, $quantity)
    {
        $product    = Product::findOrFail($product_id);
        $favourites = Cart::instance('cart')->content();

        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();
        Cart::update($desired_object->rowId, $quantity); // Will update the quantity
        // Cart::update($id, ['qty' => $quantity]);
        session()->flash('alert-success', 'Quantity updated successfully!');
        $this->dispatch('$refresh');
    }


    public function clearCart()
    {
        Cart::instance('cart')->destroy();
        $this->dispatch('toast', message: 'Корзина очищена', notify: 'success');
        // $this->fillCart();
        $this->dispatch('$refresh');
    }

    public function render()
    {
        $this->cart_total = Cart::instance('cart')->total();
        return view('livewire.cart-component', ['cart_items', Cart::instance('cart')->content()]);
    }
}
