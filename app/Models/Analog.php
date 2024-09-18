<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analog extends Model
{
    use HasFactory;
    protected $table = "analogies";

    protected $fillable = [
        'name',
        'article',
        'product_id',
        'analog_vendor_id',

    ];


    public function vendor()
    {
        return $this->belongsTo(AnalogVendor::class, 'analog_vendor_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
