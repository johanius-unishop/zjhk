<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
class ProductTypeCompositeElement extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;
    protected $fillable = [
        'name',
        'product_type_id',
        'order_column',
    ];
    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    public function buildSortQuery()
    {
        return static::query()->where('product_type_id', $this->product_type_id);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }


    public function completeProduct()
    {
        return $this->belongsTo(ProductType::class);
    }
}
