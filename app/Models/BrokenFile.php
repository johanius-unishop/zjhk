<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BrokenFile extends Model
{
    
    use HasFactory;
    protected $table = "broken_files";

    protected $fillable = [
        'model_type',
        'model_id',
        'model_name',
        'file_name'
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
}