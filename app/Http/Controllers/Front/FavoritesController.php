<?php

// app\Http\Controllers\FavoritesController.php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller {
    /**
     * Добавляет товар в избранные
     */
    public function add(Request $request, int $productId) {
        if ($request->user()) { // Если пользователь авторизирован
            $favorite = new Favorite();
            $favorite->user_id = Auth::id(); // ID текущего пользователя
            $favorite->product_id = $productId;

            try {
                $favorite->save();
                return response()->json(['message' => 'Товар успешно добавлен в избранные'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Ошибка при сохранении', 'error' => $e->getMessage()], 500);
            }
        } else { // Гостевой режим
            session()->push('guest_favorites', $productId); // Сохраняем в сессию
            return response()->json(['message' => 'Товар успешно добавлен в избранные'], 200);
        }
    }

    /**
     * Удаляет товар из избранных
     */
    public function remove(Request $request, int $productId) {
        if ($request->user()) { // Авторизированный пользователь
            Favorite::where([
                ['user_id', '=', Auth::id()],
                ['product_id', '=', $productId]
            ])->delete();
        } else { // Гость
            session()->forget("guest_favorites.$productId");
        }

        return response()->json(['message' => 'Товар удалён из избранных'], 200);
    }

    /**
     * Возвращает список избранных товаров пользователя
     */
    public function index(Request $request) {
        if ($request->user()) { // Авторизированный пользователь
            $products = Favorite::with('product')->where('user_id', Auth::id())->get();
        } else { // Гость
            $ids = session()->get('guest_favorites');
            $products = Product::find($ids);
        }

        return view('favorites.index', compact('products'));
    }
}
