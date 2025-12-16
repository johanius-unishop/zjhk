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
use Carbon\Carbon;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Maize\Searchable\HasSearch;
use Illuminate\Support\Facades\DB;

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
        'homepage_visible'
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
            get: fn() => config('app.url') . '/' . "article" . '/' . $this->slug,
        );
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }

    public function up(): bool
    {
        // Получаем предыдущий документ (тот, что выше текущего)
        $previousArticle = self::where('order_column', '<', $this->order_column)
            ->orderByDesc('order_column')
            ->first();

        if ($previousArticle) {
            // Меняем местами порядок сортировки
            DB::transaction(function () use ($previousArticle) {
                $tempOrder = $previousArticle->order_column;
                $previousArticle->order_column = $this->order_column;
                $this->order_column = $tempOrder;

                $previousArticle->save();
                $this->save();
            });

            return true;
        }

        return false;
    }

    public function down(): bool
    {
        // Получаем следующий документ (тот, что ниже текущего)
        $nextArticle = self::where('order_column', '>', $this->order_column)
            ->orderBy('order_column')
            ->first();

        if ($nextArticle) {
            // Меняем местами порядок сортировки
            DB::transaction(function () use ($nextArticle) {
                $tempOrder = $nextArticle->order_column;
                $nextArticle->order_column = $this->order_column;
                $this->order_column = $tempOrder;

                $nextArticle->save();
                $this->save();
            });

            return true;
        }

        return false;
    }

}
