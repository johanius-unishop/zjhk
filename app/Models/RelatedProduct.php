<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_product',
        'product_id',
        'related_product_type_id',
        'comment_1',
        'comment_2',
        'comment_3'
    ];

    protected $casts = [
        'order_column' => 'int',
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

    protected static function booting()
    {
        parent::booting();

        self::creating(function ($model) {
            $model->setOrderColumnBasedOnOtherColumns();
        });
    }

    protected function setOrderColumnBasedOnOtherColumns()
    {
        // Пример вычисления order_column на основе других столбцов
        $this->order_column = $this->computeOrderColumnValue();
    }

    protected function computeOrderColumnValue()
    {
        $existingRecords = self::where(['product_id' => $this->product_id, 'related_product_type_id' => $this->related_product_type_id]);
        $maximumExistingValue = $existingRecords->max('order_column');
        return $maximumExistingValue + 1;
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'id_product');
    }
}
