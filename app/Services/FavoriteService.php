<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class FavoriteService
{
    public function getFavoriteCount(): int
    {
        if (Auth::check()) {
            $user = Auth::user();
            return $user->favorites()->count();
        } else {
            $ids = session()->get('guest_favorites', []);
            return count($ids);
        }
    }
}
