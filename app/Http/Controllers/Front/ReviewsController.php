<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Показываем форму для отправки отзыва/оценки
     */
    public function create($productId)
    {
        $product = Product::findOrFail($productId); // Найдем продукт, для которого хотим создать отзыв
        return view('reviews.create', compact('product'));
    }

    /**
     * Сохраняем отзыв и оценку
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'nullable|string',
            'advantages' => 'nullable|string',
            'disadvantages' => 'nullable|string', // Исправлено название поля
            'images.*' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048' // Несколько изображений, размер файла максимум 2 Мб
        ]);

        // Убедимся, что пользователь купил этот товар
        if (!auth('web')->user()->hasBoughtProduct($validatedData['product_id'])) {
            abort(403, 'Вы можете оставлять отзывы только на товары, которые приобрели.');
        }

        // Создаем отзыв с привязкой к продукту и пользователю
        $review = auth('web')->user()->reviews()->create(array_merge($validatedData, [
            'product_id' => $validatedData['product_id'],
            'user_id' => auth('web')->id(),
        ]));

        // Присоединяем все присланные изображения к отзыву
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $review->addMedia($image)->toMediaCollection('photos');
            }
        }

        return redirect()->route('product.show', $validatedData['product_id'])
            ->with('message', 'Ваш отзыв успешно сохранён!');
    }

    /**
     * Удаление отзыва пользователем
     */
    public function destroy(Review $review)
    {
        if ($review->user_id !== auth('web')->id()) {
            abort(403, 'Вы не имеете права удалять чужой отзыв.');
        }

        $review->delete();
        return back()->with('message', 'Отзыв удалён успешно.');
    }
}
