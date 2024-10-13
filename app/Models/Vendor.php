<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
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
        'country',
        'delivery_time',
        'warranty',
        'logo',
    ];
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

    // public function getDynamicSEOData(): SEOData
    // {
    //     return new SEOData(
    //         title: $this->title,
    //         description: $this->description,

    //     );
    // }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->nonQueued();

        // $this
        //     ->addMediaConversion('responsive')
        //     ->format('webp')
        //     ->quality(80)
        //     ->withResponsiveImages()
        //     ->nonQueued();
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'))
            ->useFallbackUrl('/images/default_image_thumb.jpg', 'thumb')
            ->useFallbackPath(public_path('/images/default_image_thumb.jpg'), 'thumb')
            ->singleFile();
    }
    public function product()
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
}
