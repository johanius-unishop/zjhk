<?php

namespace App\Models;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\PathGenerators\CountryPathGenerator;


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
        $this->addMediaCollection('countryFlag')
            ->useDisk('countries')
            ->withResponsiveImages()
            ->singleFile()
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'));
    }

    protected function getPath(Model $model): string
    {
        return app(CountryPathGenerator::class)->getPath($model);
    }

    protected function getPathForConversions(Model $model): string
    {
        return app(CountryPathGenerator::class)->getPathForConversions($model);
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
