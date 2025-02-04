<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

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
