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
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Page extends Model implements Sortable, HasMedia
{

    use SortableTrait;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    protected $appends = ['front_url'];

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
            get: fn() => strlen($this->old_link) > 0 ? config('app.url') . DIRECTORY_SEPARATOR . $this->old_link : config('app.url') . DIRECTORY_SEPARATOR . "pages" . DIRECTORY_SEPARATOR . $this->slug,

            // get: fn() => strlen($this->old_link) > 0 ? config('app.url').DIRECTORY_SEPARATOR .$this->old_link : config('app.url').DIRECTORY_SEPARATOR . "news" . DIRECTORY_SEPARATOR . $this->slug,

        );
    }
}
