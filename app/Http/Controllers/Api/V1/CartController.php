<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Response;

class CartController extends Controller
{
    public function getCart(Request $request)
    {
        $count = Cart::instance('cart')->count();

        // $cart = Cart::content();
        // $total = Cart::total();
        // return Response::json(array('content' => $cart, 'count' => $count, 'total' => $total));

        return response()->json(array('count' => $count), 200);


    }
    public function addToCart(Request $request)
    {
        $items = [];

        return response()->json($items, 200);
    }
    public function subToCart(Request $request)
    {
        $items = [];

        return response()->json($items, 200);
    }

    public function getFavourite(Request $request)
    {
        $count = Cart::instance('favourites')->count();
        return response()->json(array('count' => $count), 200);
    }
    public function addToFavourite(Request $request)
    {

        $product = Product::findOrFail($request->get('q'));
        // try {
            // Cart::instance('favourites')->associate('Product')
            Cart::instance('favourites')->add($product->id, $product->name, 1, 1, 1);
            $responseText = Cart::instance('favourites')->count();

        // }
        // catch (\Throwable $th) {
        //     echo '<br>' . $th->getMessage();
        //     echo '<br>' . $product->id;
        // }
        return response()->json($responseText, 200);
    }
    public function subToFavourite(Request $request)
    {

        $product = Product::find($request->get('q'));
        // $rowids = Cart::instance('favourites')->search( $product->id  );
        // dd($rowids);
        $favourites     = Cart::instance('favourites')->content();
        $desired_object = $favourites->filter(function ($item) use ($product) {
            return $item->id == $product->id;
        })->first();

        dd($favourites, $desired_object, $product->id);
        // foreach ($rowids as $key => $value) {
        //     Cart::instance('favourites')->remove($value);

        // }



        // $favourites = Cart::instance('favourites')->content();
        // // Cart::instance('favourites')->erase(request()->cookie('cartId'));
        // try {
        //     $desired_object = $favourites->filter(function ($item) use ($product) {
        //         return $item->id == $product->id;
        //     })->first();
        //     if ($desired_object) {
        //         Cart::instance('favourites')->remove($desired_object->rowId);
        //     }
        // }
        // catch (\Throwable $th) {
        //     echo '<br>' . $th->getMessage();
        //     echo '<br>' . $product->id;
        // }


        // Cart::instance('favourites')->store(request()->cookie('cartId'));
        $responseText = Cart::instance('favourites')->count();


        return response($responseText, 200)
            ->header('Content-Type', 'text/plain');
        // return response()->json('responseText', 200);

    }
}
