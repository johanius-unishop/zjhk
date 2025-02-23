<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BrokenFile extends Model
{
    protected $fillable = [
        'model_type',
        'model_id',
        'model_name',
        'file_name'
    ];
}
