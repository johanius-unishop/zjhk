<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentationType extends Model
{

    protected $fillable = [
        'title',
        'text',
        'vendor_id',
        'type_id',
    ];

    public function documents()
    {
        return $this->hasMany(Documentation::class); // Много записей документации имеют один тип
    }
}
