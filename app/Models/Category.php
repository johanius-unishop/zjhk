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
class Category extends Model implements Sortable, HasMedia
{
    use HasFactory;
    use HasSearch;
    use SortableTrait;
    use InteractsWithMedia;
    use HasSEO;
    use HasSlug;
    // https://github.com/ralphjsmit/laravel-seo
    protected $fillable = [
        'name',
        'description',
        'root_id',
        'published',
        'slug',
        'custom_title',
        'order_column',
    ];
    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    public function buildSortQuery()
    {
        return static::query()->where('root_id', $this->root_id);
    }
    /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [
            'name' => 5, // Model attribute
            'body_description' => 2,
            // 'tags.name', // Relationship attribute
            // 'tags.description.*', // All json keys of a relationship attribute
            // DB::raw("CONCAT(creator_name, ' ', creator_surname)"), // Raw expressions are supported too
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
        $this->addMediaCollection('images');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'root_id');
    }

    public function childrens()
    {
        return $this->hasMany(Category::class, 'root_id');
    }
}
