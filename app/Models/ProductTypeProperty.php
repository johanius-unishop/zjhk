<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
class ProductTypeProperty extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;
    protected $table = 'product_kinds_props';

    protected $fillable = [
        'name',
        'product_kind_id',
        'sorting',
        'section',

    ];



    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    public function buildSortQuery()
    {
        return static::query()->where('product_kind_prop_id', $this->root_id);
    }
    public function values()
    {
        return $this->hasMany(Property::class, 'product_kind_prop_id');
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_kind_id');
    }
}
