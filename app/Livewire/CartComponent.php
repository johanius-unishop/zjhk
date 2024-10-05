<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CartComponent extends Component
{
    use LivewireAlert;
    public $cart;

    public $cart_total;
    public $products_id = [];
    public $products;

    public function updateCart(): void
    {
        $items = Cart::instance('cart')->content();
        $products_id = [];
        foreach ($items as $key) {
            $products_id[] = ($key->id);
        }
        $this->products = Product::whereIn('id', $products_id)->get();
        $this->cart_total =Cart::total();;
    }

    public function mount(): void
    {
        // $items = Cart::instance('cart')->content();
        // foreach ($items as $key) {
        //     $products_id[] = ($key->id);
        // }
        // $this->products = Product::whereIn('id', $products_id)->get();

        $this->updateCart( );
    }

    public function removeFromCart($productId): void
    {
        $product = Product::findOrFail($productId);

        $favourites     = Cart::instance('cart')->content();
        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();

        Cart::instance('cart')->remove($desired_object->rowId);
        $this->dispatch('toast', message: 'Товар удален из корзины', notify: 'success');
        $this->dispatch(  '$refresh');
        $this->updateCart( );

    }





    public function render()
    {
        return view('livewire.cart-component');
    }
}
