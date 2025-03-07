<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class VendorPdfCatalog extends Model implements Sortable, HasMedia
{
    use HasFactory;
    use SortableTrait;
    use InteractsWithMedia;
    /**
     * Get the options for generating the slug.
     */

    protected $fillable = [
        'name',
        'order_column',
        'description',
        'vendor_id',
        'pdf_path'
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
    
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->nonQueued();

       
    }
    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('pdfCatalogCoverImage')
            ->useDisk('vendors')
            ->withResponsiveImages()
            ->singleFile()
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'));

        $this->addMediaCollection('pdfCatalog')
            ->useDisk('vendors')
            ->singleFile()
            ->acceptsMimeTypes(['application/pdf']);

            
            
    }
    
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}