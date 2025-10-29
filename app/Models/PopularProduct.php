<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopularProduct extends Model
{
    protected $fillable = ['product_id']; // Массовое наполнение доступно для атрибута product_id

    public function product()
    {
        return $this->belongsTo(Product::class); // Продукт принадлежит товару
    }
}
