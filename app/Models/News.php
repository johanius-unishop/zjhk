<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class News extends Model implements Sortable, HasMedia, Sitemapable
{
    use HasFactory;
    use SortableTrait;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    protected $appends = ['front_url'];


    public function toSitemapTag(): Url|string|array
    {
        // Simple return:
        // return route('blog.post.show', $this);

        // Return with fine-grained control:
        return Url::create($this->front_url)
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
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
    // public function toSitemapTag(): Url | string | array
    // {
    //     // Simple return:
    //     // return route('blog.post.show', $this);

    //     // Return with fine-grained control:
    //     return Url::create(route('blog.post.show', $this))
    //         ->setLastModificationDate(Carbon::create($this->updated_at))
    //         ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
    //         ->setPriority(0.5);
    // }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];


    protected $fillable = [
        'name',
        'order_column',
        'body_description',
        'anouncement',
        'image_link',
        'old_link',
        'old_code',
        'slug',
        'active',
        'created_at',
        'vendor_id',

    ];
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Fit::Crop, 396, 282)
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

        $this->addMediaCollection('images')
            ->useFallbackUrl('/img/product/prod_img_1.jpg')
            ->useFallbackPath(public_path('/img/product/prod_img_1.jpg'))
            ->useFallbackUrl('/img/product/prod_img_1_thumb.jpg', 'thumb')
            ->useFallbackPath(public_path('/img/product/prod_img_1_thumb.jpg'), 'thumb');
        ;
    }

    protected function frontUrl(): Attribute
    {
        return new Attribute(
            get: fn() => strlen($this->old_link) > 0 ? config('app.url') . DIRECTORY_SEPARATOR . $this->old_link : config('app.url') . DIRECTORY_SEPARATOR . "news" . DIRECTORY_SEPARATOR . $this->slug,

            // get: fn() => strlen($this->old_link) > 0 ? config('app.url').DIRECTORY_SEPARATOR .$this->old_link : config('app.url').DIRECTORY_SEPARATOR . "news" . DIRECTORY_SEPARATOR . $this->slug,

        );
    }


    protected function nextUrl(): Attribute
    {
        $next_record = self::where('id', '>', $this->id)->orderBy('id')->first();

        if ($next_record) {
            return new Attribute(
                get: fn() => strlen(@$next_record->old_link) > 0 ? config('app.url') . DIRECTORY_SEPARATOR . @$next_record->old_link : config('app.url') . DIRECTORY_SEPARATOR . "news" . DIRECTORY_SEPARATOR . @$next_record->slug,
            );
        }
        return new Attribute(
            get: fn() => config('app.url') . DIRECTORY_SEPARATOR . "blog",
        );

    }
    protected function previousUrl(): Attribute
    {
        $previous_record = self::where('id', '<', $this->id)->orderBy('id')->first();

        if ($previous_record) {
            return new Attribute(
                get: fn() => strlen(@$previous_record->old_link) > 0 ? config('app.url') . DIRECTORY_SEPARATOR . @$previous_record->old_link : config('app.url') . DIRECTORY_SEPARATOR . "news" . DIRECTORY_SEPARATOR . @$previous_record->slug,
            );
        }
        return new Attribute(
            get: fn() => config('app.url') . DIRECTORY_SEPARATOR . "blog",
        );
    }
}
