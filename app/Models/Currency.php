<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'charcode',
        'cb_rate',
        'internal_rate',
        'auto_calc_cbrf',
        'auto_multiplier'

    ];
}
