<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Country extends Model implements HasMedia
{
    use InteractsWithMedia;
    /**
     * Get the options for generating the slug.
     */

    protected $fillable = [
        'name',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('countryFlag');
    }
    
    // Страна может иметь много товаров
    public function products() {
        return $this->hasMany(Product::class);
    }

    // Страна может иметь много производителей
    public function vendors() {
        return $this->hasMany(Vendor::class);
    }
}
