<?php
// app/Services/FavoriteService.php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FavoriteService
{
    public function addFavorite($productId)
    {
        if(Auth::check()) {
            $user = Auth::user();
            $user->favoriteProducts()->attach($productId);
        } else {
            session()->push('favorite_products', $productId);
        }
    }

    public function removeFavorite($productId)
    {
        if(Auth::check()) {
            Auth::user()->favoriteProducts()->detach($productId);
        } else {
            session()->forget('favorite_products.' . array_search($productId, session('favorite_products')));
        }
    }

    public function getFavorites()
    {
        if(Auth::check()) {
            return Auth::user()->favoriteProducts;
        } else {
            return Product::whereIn('id', session('favorite_products', []))->get();
        }
    }
}
