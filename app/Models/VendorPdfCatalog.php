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
            ->pathGenerator(function ($media, $model) {
                if (!empty($model->short_name)) {
                    return "{$model->short_name}/catalogs";
                } else {
                    return "{$model->name}/caralogs";
                }
            })
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'));

        $this->addMediaCollection('pdfCatalog')
            ->useDisk('vendors')
            ->pathGenerator(function ($media, $model) {
                if (!empty($model->short_name)) {
                    return "{$model->short_name}/catalogs";
                } else {
                    return "{$model->name}/catalogs";
                }
            })
            ->singleFile()
            ->acceptsMimeTypes(mimeTypes: ['application/pdf']);
            
    }
    
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}