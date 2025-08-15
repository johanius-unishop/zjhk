<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Searchable\HasSearch;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Kalnoy\Nestedset\NodeTrait;
use Kalnoy\Nestedset\NestedSet;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;
class Category extends Model implements Sortable, HasMedia
{
    use HasFactory;
    use HasSearch;
    use SortableTrait;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    use NodeTrait;
    // https://github.com/ralphjsmit/laravel-seo
    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'published',
        'slug',
        'custom_title',
        'order_column',
    ];
    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
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

    public function buildSortQuery()
    {
        return static::query()->where('parent_id', $this->root_id);
    }
    /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [
            'name' => 10, // Model attribute
            'description' => 5,

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
        $this->addMediaCollection('images')
        ->useFallbackUrl('/images/default_image.jpg')
        ->useFallbackPath(public_path('/images/default_image.jpg'))
        ->useFallbackUrl('/images/default_image_thumb.jpg', 'thumb')
        ->useFallbackPath(public_path('/images/default_image_thumb.jpg'), 'thumb');

    }


    //
    // Связь с родительской категорией
    //
    // @return BelongsTo
    //
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    //
    // Подкатегории данной категории
    //
    // @return HasMany
    //
    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }


    /**
     * Get all categories as nested tree
     *
     * @return \Kalnoy\Nestedset\Collection
     */


    public static function getCategoriesAsTree()
    {
        $cache_name = 'CategoriesAsTree';
        $res        = cache()->remember($cache_name, env('CACHE_LIFETIME'), function () {
            return Category::select(['id', 'name', NestedSet::PARENT_ID, NestedSet::LFT, NestedSet::RGT])
                ->with(['children'])
                ->get(array('id', 'name', NestedSet::PARENT_ID, NestedSet::LFT, NestedSet::RGT))
                ->toTree();
        });

        return $res;
    }
    public function getCanDeletedAttribute()
    {
        // TODO Доделать проверку
        if ($this->product_count   > 0) {
            return false;
        }
        return true;
    }


    protected function frontUrl(): Attribute
    {
        return new Attribute(
            get: fn() => config('app.url') . "/category/" . $this->slug,
        );
    }
    public function scopePublished(Builder $query): void
    {
        $query->where('published', 1);
    }

}

