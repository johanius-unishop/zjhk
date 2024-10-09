<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Maize\Searchable\HasSearch;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
class Article extends Model implements HasMedia, Sitemapable, Sortable
{

    use HasSearch;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    use SortableTrait;



    protected $fillable = [
        'name',
        'order_column',
        'body_description',
        'slug',
        'published',
        'short_description',
    ];


    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [

            'name' => 8, // Model attribute
            'body_description' => 4,
            'short_description' => 4, // All json keys of a model attribute

        ];
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function toSitemapTag(): Url|string|array
    {
        return Url::create($this->front_url)
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }

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

        $this->addMediaCollection(name: 'files');//Файлы

    }
    protected function frontUrl(): Attribute
    {
        return new Attribute(
            get: fn() => config('app.url') . '/' . "article" . '/' . $this->slug,
        );
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }
}
