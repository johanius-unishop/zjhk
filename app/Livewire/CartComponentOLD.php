<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CartComponentOLD extends Component
{
    use LivewireAlert;
    public $cart;
    public $cart_items;
    public $cart_total;
    public $products_id = [];
    public $products = [];

    public function fillCart(): void
    {
        $items = Cart::instance('cart')->content();


        // dd($items);

        foreach ($items as $key) {
            $this->cart_items[$key->rowId]['id']           = $key->id;
            $this->cart_items[$key->rowId]['product_name'] = Product::findOrFail($key->id)->name;
            $this->cart_items[$key->rowId]['rowId']        = $key->rowId;
            $this->cart_items[$key->rowId]['qty']          = $key->qty;
            $this->cart_items[$key->rowId]['price']        = $key->price;
            $this->cart_items[$key->rowId]['sum']          = $key->price * $key->qty;


        }
        // $this->products   = Product::whereIn('id', $products_id)->get();
        // $this->cart_total = Cart::instance('cart')->total();
// dd($this->cart_items    );
    }

    public function mount(): void
    {
        $this->cart_total = Cart::instance('cart')->total();

        $this->fillCart();
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

        $this->fillCart();
        $this->dispatch('$refresh');
    }


    public function checkout()
    {
        $this->dispatch('toast', message: 'Заказ оформлен', notify: 'success');

    }
    public function updateQuantity($id, $quantity)
    {

        dd($id, $quantity);
        Cart::update($id, ['qty' => $quantity]);
        session()->flash('alert-success', 'Quantity updated successfully!');
    }

    public function updateCart( $rowId)
    {
        dd($rowId ,$this->cart_items);

    }
    public function clearCart()
    {

        Cart::instance('cart')->destroy();
        $this->dispatch('toast', message: 'Корзина очищена', notify: 'success');

        $this->fillCart();
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.cart-component');
    }
}
