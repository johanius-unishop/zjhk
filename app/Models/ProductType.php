<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    protected $fillable = [
        'name',
        'name_plural',
        'composite',
        'slug',
        'published',
        'delivery_time',

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
    
    // Связь с товарами
    public function products() {
        return $this->hasMany(Product::class, 'product_type_id');
    }

    public function properties()
    {
        return $this->hasMany(ProductTypeProperty::class, 'product_type_id')->ordered();
    }

    public function relatedTypes(){
        return $this->hasMany(RelatedProductType::class, 'product_type_id');
    }

    public function composites()
    {
        return $this->hasMany(ProductTypeCompositeElement::class, 'product_type_id')->ordered();
    }

    public function delete()
    {
        // Каскадное удаление свойств типа продукта
        $this->properties()->each(function ($property) {
            $property->delete();
        });

        // Удаление самого типа продукта
        parent::delete();
    }
}
 