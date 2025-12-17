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

    public function toSitemapTag(): Url|string|array
    {
        // Simple return:
        // return route('blog.post.show', $this);

        // Return with fine-grained control:
        return Url::create($this->front_url)
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.4);
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


    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];


    protected $fillable = [
        'name',
        'order_column',
        'body_description',
        'short_description',
        'slug',
        'published',
        'homepage_visible'
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(FIT::Fill, 220, 220)   // Сохраняем пропорцию, максимум ширина или высота 300px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('previewImages')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('webp-thumb')
            ->fit(FIT::Fill, 220, 220)
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('previewImages')
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('previewImages')
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'))
            ->useFallbackUrl('/images/default_image_thumb.jpg', 'thumb')
            ->useFallbackPath(public_path('/images/default_image_thumb.jpg'), 'thumb')
            ->singleFile();
    }

    protected function frontUrl(): Attribute
    {
        return new Attribute(
            get: fn() => config(key: 'app.url') . "/news/" . $this->slug,
        );
    }


    protected function nextUrl(): Attribute
    {
        $next_record = self::where('id', '>', $this->id)->orderBy('id')->first();

        if ($next_record) {
            return new Attribute(
                get: fn() => config('app.url') . "/news/" . @$next_record->slug,
            );
        }
        return new Attribute(
            get: fn() => config('app.url') . "/news",
        );

    }
    protected function previousUrl(): Attribute
    {
        $previous_record = self::where('id', '<', $this->id)->orderBy('id')->first();

        if ($previous_record) {
            return new Attribute(
                get: fn() => config('app.url') . "/news/" . @$previous_record->slug,
            );
        }
        return new Attribute(
            get: fn() => config('app.url') . "/news",
        );
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }
}
