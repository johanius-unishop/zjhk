<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Artesaos\SEOTools\Facades\SEOMeta;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    public function order_confirm()
    {
        return view('front.cart.order_confirmed');

    }
    public function make_order(Request $request)
    {

        $favourites = Cart::instance('cart')->content();

        $new_order = Order::create([
            'name' => $request->name,
            'email' => $request->mail,
            'phone_number' => $request->phone,
            'body_description' => $request->textarea,
        ]);
        foreach ($favourites as $key) {
            $products_id[] = ($key->id);
        }
        $products_to_order = Product::whereIn('id', $products_id)->get();
        foreach ($products_to_order as $product) {
            OrderItem::create([
                'order_id' => $new_order->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => 1,
            ]);
        }

        Cart::instance('cart')->destroy();

        $request->session()->flash('success', 'Наш сотрудник свяжется с Вами в ближайшее время');
        return redirect()->back()->with('success', 'Наш сотрудник свяжется с Bами в ближайшее время');

    }
    /**
     * Display a listing of the resource.
     */
    public function show_cart(Request $request)
    {
        // $data       = $request->session()->all();
        // $cartId     = session()->getId();
        // $favourites = Cart::instance('cart')->content();

        // $products_id = [];
        // foreach ($favourites as $key) {
        //     $products_id[] = ($key->id);
        // }
        // $products = Product::whereIn('id', $products_id)->get();


        // dd(  $products );
        // $products_in_stock = $products->filter(function ($value, $key) {
        //     return $value->in_stock == 1;
        // });
        // $products_in_stock->all();
        // // $products_in_stock->load('vendor', 'product_style', 'vendor.price_segment');

        // $products_to_order = $products->filter(function ($value, $key) {
        //     return $value->in_stock == 0;
        // });
        // $products_to_order->all();
        // // $products_to_order->load('vendor', 'product_style', 'vendor.price_segment');

        // $items_count_text = 'Корзина пуста';
        // if ($favourites->count() > 0) {
        //     $items_count_text = $favourites->count() . ' ' . pluralize($favourites->count(), array('товар', 'товара', 'товаров'));
        // }

        SEOMeta::setTitle('Корзина');
        SEOMeta::setDescription('Корзина товаров');
        return view('front.cart.show');

        // return view('front.cart.show', compact('products_in_stock', 'products_to_order', 'items_count_text'));
    }

    public function addToCart(Request $request)
    {
        // TODO проверка на наличие в избранном и в корзине
        $product = Product::findOrFail($request->get('q'));
        $cartItem =  Cart::instance('cart')->add($product->id, $product->name, 1, $product->price, 1)->associate(Product::class);
        // $cartItem->associate($product);
        $responseText = Cart::instance('cart')->count();
        return response()->json($responseText, 200);
    }


    public function subFromCart(Request $request)
    {
        // TODO проверка на наличие   в корзине
        $product = Product::findOrFail($request->get('product'));

        $favourites     = Cart::instance('cart')->content();
        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();

        Cart::instance('cart')->remove($desired_object->rowId);

        $request->session()->flash('success', 'Товар удален из корзины');
        return redirect()->back()->with('success', 'Товар удален из корзины');
    }

    public function clearCart(Request $request)
    {
        Cart::instance('cart')->destroy();
        $request->session()->flash('success', 'Корзина очищена');
        return redirect()->back()->with('success', 'Корзина очищена');
    }



    public function show_favourites(Request $request)
    {

        $favourites  = Cart::instance('favourites')->content();
        $products_id = [];
        foreach ($favourites as $key) {
            $products_id[] = ($key->id);
        }
        $products         = Product::whereIn('id', $products_id)->get();
        $items_count_text = 'Избранное пусто';
        if ($products->count() > 0) {
            $items_count_text = $products->count() . ' ' . pluralize($products->count(), ['товар', 'товара', 'товаров']);
        }
        return view('front.cart.favourites', compact('products', 'items_count_text'));

    }
    public function addToFavourite(Request $request)
    {
        // TODO проверка на наличие в избранном и в корзине
        $product = Product::findOrFail($request->get('q'));
        // Cart::instance('favourites')->add($product->id, $product->name, 1, 1, 1);

        $cartItem =  Cart::instance('favourites')->add($product->id, $product->name, 1, $product->price, 1)->associate(Product::class);

        $responseText = Cart::instance('favourites')->count();
        return response()->json($responseText, 200);
    }



    public function subToFavourite(Request $request)
    {
        $product        = Product::find($request->get('q'));
        $favourites     = Cart::instance('favourites')->content();
        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();

        Cart::instance('favourites')->remove($desired_object->rowId);

        $responseText = Cart::instance('favourites')->count();
        return response()->json($responseText, 200);

    }
}
