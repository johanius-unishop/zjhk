<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalSetting extends Model
{
    protected $fillable = ['group', 'name', 'value', 'description'];
}