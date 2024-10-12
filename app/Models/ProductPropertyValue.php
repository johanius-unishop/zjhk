<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPropertyValue extends Model
{

    protected $table = 'product_property_values';

    protected $fillable = [
        'product_id',
        'product_type_property_id',
        'product_type_property_value_id',
    ];


    public function productTypeProperty()
    {
        return $this->belongsTo(ProductTypeProperty::class, 'product_type_property_id');
    }
    public function value()
    {
        return $this->hasOne(ProductTypePropertyValue::class, 'product_type_property_id');
    }
    public function propertyValue()
    {
        return $this->hasOne(ProductTypePropertyValue::class  , 'id' , 'product_type_property_value_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
