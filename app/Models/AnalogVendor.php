<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalogVendor extends Model
{
    use HasFactory;
    protected $table = "analog_vendors";
    protected $fillable = [
        'name',
        'published',
    ];
}
