<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Image\Enums\Fit;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\PathGenerators\VendorPathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Vendor extends Model implements Sortable, HasMedia
{
    use HasFactory;
    use HasSlug;
    use HasSEO;
    use SortableTrait;
    use InteractsWithMedia;
    /**
     * Get the options for generating the slug.
     */

    protected $fillable = [
        'name',
        'short_name',
        'order_column',
        'description',
        'slug',
        'published',
        'country_id',
        'delivery_time',
        'warranty',
        'logo',
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
    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(120)
            ->usingSeparator('-')
            ->usingLanguage('ru');
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(FIT::Fill, 108, 46)   // Сохраняем пропорцию, максимум ширина или высота 300px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('vendorLogo')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('webp-thumb')
            ->fit(FIT::Fill, 108, 46)
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('vendorLogo')
            ->nonQueued();

        $this->addMediaConversion('webp')
            ->fit(FIT::Fill, 300, 170)
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('vendorLogo')
            ->nonQueued();

        $this->addMediaConversion('jpg')
            ->fit(FIT::Fill, 300, 170)
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('vendorLogo')
            ->nonQueued();
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vendorLogo')
            ->useDisk('vendors')
            ->withResponsiveImages()
            ->singleFile()
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'));
    }

    protected function getPath(Model $model): string
    {
        return app(VendorPathGenerator::class)->getPath($model);
    }

    protected function getPathForConversions(Model $model): string
    {
        return app(VendorPathGenerator::class)->getPathForConversions($model);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'vendor_id', 'id');
    }
    public function getCanBeDeletedAttribute()
    {
        if ($this->product->count() > 0) {
            return false;
        }
        return true;
    }
    protected function frontUrl(): Attribute
    {
        return new Attribute(

            get: fn(): string => config(key: 'app.url') . "/vendors/" . $this->slug,

        );
    }


    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }

    // Связь производителя с страной
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function catalogs()
    {
        return $this->hasMany(VendorPdfCatalog::class);
    }

    public function documentations()
    {
        return $this->hasMany(Documentation::class); // Многие документы относятся к одному бренду
    }
}
