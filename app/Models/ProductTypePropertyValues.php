<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypePropertyValues extends Model
{
    use HasFactory;

    protected $table = 'product_type_property_values';

    protected $fillable = [
        'value',
        'product_type_property_id',

    ];


    public function productTypeProperty()
    {
        return $this->belongsTo(ProductTypeProperty::class, 'product_type_property_id');
    }
}
