<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalSetting extends Model
{
    protected $fillable = ['group', 'name', 'value', 'description'];

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