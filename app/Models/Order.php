<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'order_date',
        'received'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_compositions', 'order_id', 'product_id');
    }
}
