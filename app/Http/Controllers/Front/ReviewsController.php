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
            'review_title' => 'nullable|string|max:255',
            'review_text' => 'nullable|string'
        ]);

        // Убедимся, что пользователь купил этот товар
        if (!auth('web')->user()->hasBoughtProduct($validatedData['product_id'])) {
            abort(403, 'Вы можете оставлять отзывы только на товары, которые приобрели.');
        }

        auth('web')->user()->reviews()->create($validatedData);

        return redirect()->route('product.show', $validatedData['product_id'])->with('message', 'Ваш отзыв успешно сохранён!');
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
