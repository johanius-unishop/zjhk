<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
  class RelatedProductType extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;
    protected $table = 'related_product_types';

    protected $fillable = [
        'name',
        'product_type_id',
        // 'sorting',
        'order_column',
        'section',

    ];

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
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
    public function buildSortQuery()
    {
        return static::query()->where('product_type_id', $this->product_type_id);
    }

    public function productType()
    {
        return $this->belongsTo (ProductType::class);
    }
    public function relatedProducts()
    {
        return $this->hasMany(RelatedProduct::class);
    }

    public static function getWithRelatedProductCounts($parentTypeId)
    {
        return self::query()
            ->where('product_type_id', '=', $parentTypeId)
            ->withCount('relatedProducts') // Подсчитываем количество связанных продуктов
            ->orderBy('order_column')
            ->get();
    }

}
