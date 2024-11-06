<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Support\Facades\DB;
class ProductTypeProperty extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;
    protected $table = 'product_type_properties';

    protected $fillable = [
        'name',
        'product_type_id',
        'sorting',
        'order_column',
        'section',

    ];

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    public function buildSortQuery()
    {
        return static::query()->where('product_type_id', $this->product_type_id);
    }
    // Связь с типом товара
    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
    // Связь с возможными значениями
    public function productTypePropertyValues()
    {
        return $this->hasMany(ProductTypePropertyValue::class, 'product_type_property_id');
    }

    // Связь с товаром через промежуточную таблицу
    public function productPropertyValues() {
        return $this->belongsToMany(
            Product::class,
            'product_type_property_values',
            'product_type_property_id', // Внешний ключ для этого свойства
            'product_id'                // Внешний ключ для продукта
        )->using(ProductPropertyValue::class); // Промежуточная модель
    }

        
    protected static function boot()
    {
        parent::boot();

        // Удаляем все связанные значения при удалении свойства
        static::deleting(function ($model) {
            DB::transaction(function () use ($model) {
                $model->productTypePropertyValues()->delete(); // Удаление всех связанных значений
                $model->productPropertyValues()->detach(); // Отсоединение всех товаров
            });
        });
    }
}
