<?php

namespace App\Models;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\PathGenerators\CountryPathGenerator;
use Spatie\Image\Enums\Fit;


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
        'name_in_english',
        'charcode'
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

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(FIT::Fill, 16, 16)   // Сохраняем пропорцию, максимум ширина или высота 300px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('countryFlag')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('webp-thumb')
            ->fit(FIT::Fill, 16, 16)
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('countryFlag')
            ->nonQueued();

        $this->addMediaConversion('webp')
            ->fit(FIT::Fill, 600, 600)
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('countryFlag')
            ->nonQueued();

        $this->addMediaConversion('jpg')
            ->fit(FIT::Fill, 600, 600)
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('countryFlag')
            ->nonQueued();


    }

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
