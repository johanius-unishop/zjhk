<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

use Illuminate\Database\Eloquent\Builder;

class Faq extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;
    protected $fillable = [
        'question',
        'answer',
        'order_column',
        'published',
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

    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }

}
