<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_kind_composite_element extends Model
{
    use HasFactory;


    public function elements()
    {
        return $this->hasMany(ProductCompositeElement::class, 'product_composite_element_id');
    }
}
