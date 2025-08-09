<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'review_title',
        'review_text',
        'admin_reply',
        'admin_replied_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Получение статуса наличия ответа на отзыв
    public function isReplied(): bool
    {
        return !is_null($this->admin_reply);
    }
}
