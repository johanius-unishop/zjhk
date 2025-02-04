<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Searchable\HasSearch;

class ProductTypePropertyValue extends Model
{
    use HasFactory;
    use HasSearch;
    protected $table = 'product_type_property_values';

    protected $fillable = [
        'value',
        'product_type_property_id',
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

    /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [
            'value' => 8, // Model attribute
        ];
    }

    // Связь со свойством
    public function productTypeProperty()
    {
        return $this->belongsTo(ProductTypeProperty::class, 'product_type_property_id');
    }

    public function productPropertyValues()
    {
        return $this->hasMany(ProductPropertyValue::class, 'product_type_property_value_id', 'id');
    }
    

   
}
