<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;


class ReviewsController extends Controller
{
    public function reply(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'reply' => 'required|string'
        ]);

        // Проверка прав администратора
        if (!auth()->user()->isAdmin()) { // Предполагается наличие флага is_admin у пользователя
            abort(403, 'Только администрация может отвечать на отзывы.');
        }

        $review->update([
            'admin_reply' => $validatedData['reply'],
            'admin_replied_at' => now(),
        ]);

        return back()->with('message', 'Комментарий успешно отправлен!');
    }
}
