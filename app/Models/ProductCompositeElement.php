<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCompositeElement extends Model
{


    protected $table = 'product_composite_elements';
    protected $fillable = [
        'product_type_composite_element_id',
        'product_id',
        'product_element_id',
        'quantity',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }



    public function compositeProduct()
    {
        return $this->belongsTo(Product::class, 'product_element_id');
    }


    public function compositeType()
    {
        return $this->belongsTo(ProductTypeCompositeElement::class, 'product_type_composite_element_id');
    }

}
