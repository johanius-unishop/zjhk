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
    public function props()
    {
        return $this->hasMany(ProductTypeProperty::class, 'product_type_id')->ordered();
    }

    public function old_props()
    {
        return $this->hasMany(ProductTypeProperty::class, 'product_type_id');
    }


    // public function relatedTypes(){
    //     return $this->hasMany(Related_product_type::class, 'product_type_id');
    // }
    public function relatedTypes(){
        return $this->hasMany(RelatedProductType::class, 'product_type_id');
    }

    public function compositeElements()
    {

        return $this->hasMany(Product_kind_composite_element::class, 'product_type_id');
    }
}
