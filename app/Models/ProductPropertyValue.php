<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductPropertyValue extends Pivot
{

    protected $table = 'product_property_values';

    protected $fillable = [
        'product_id',
        'product_type_property_id',
        'product_type_property_value_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            foreach ($model->getFillable() as $field) {
                if (is_string($model->$field)) {
                    $model->$field = trim($model->$field);
                }
            }
        });
    }

    // Связь с товаром
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Связь со свойством типа товара
    public function productTypeProperty() {
        return $this->belongsTo(ProductTypeProperty::class, 'product_type_property_id');
    }

    // Связь с возможным значением свойства
    public function productTypePropertyValue() {
        return $this->hasOne(ProductTypePropertyValue::class, 'id','product_type_property_value_id');
    }
    
}
