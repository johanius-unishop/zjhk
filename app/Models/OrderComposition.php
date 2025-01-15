<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderComposition extends Model
{
    use HasFactory;
    protected $table = "order_compositions";
    protected $guarded = [];

    protected $fillable = ['quantity', 'product_id', 'order_id'];

    // Связь с моделью Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    // Связь с моделью Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
