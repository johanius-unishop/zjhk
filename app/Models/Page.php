<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
class Page extends Model implements Sortable, HasMedia, Sitemapable
{

    use SortableTrait;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    protected $appends = ['front_url'];

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

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }



    public function toSitemapTag(): Url|string|array
    {
        return Url::create(route('article.details', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.3);
    }




    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];

    use HasFactory;

    protected $fillable = [
        'name',
        'body_description',
        'short_description',
        'slug',
        'order_column',
        'active',
        'protected',

    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(282)
            ->nonQueued();

        // $this
        //     ->addMediaConversion('responsive')
        //     ->format('webp')
        //     ->quality(80)
        //     ->withResponsiveImages()
        //     ->nonQueued();
    }


    protected function frontUrl(): Attribute
    {
        return new Attribute(
            get: fn() => config(key: 'app.url') . "/pages/" . $this->slug,


        );
    }
}
