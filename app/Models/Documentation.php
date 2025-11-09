<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Documentation extends Model implements HasMedia
{

    use InteractsWithMedia;
    protected $table = "documentation";

    protected $fillable = [
        'title',
        'text',
        'vendor_id',
        'type_id',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('jpeg-images')
            ->fit(FIT::Fill, 245, 178)   // Сохраняем пропорцию, максимум ширина 245 или высота 178px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('webp-images')
            ->fit(FIT::Fill, 245, 178)   // Сохраняем пропорцию, максимум ширина 245 или высота 178px
            ->format('webp')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();
    }



    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images') //Изображения
            ->useDisk('documentation')
            ->withResponsiveImages()
            ->singleFile()
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'))
            ->useFallbackUrl('/images/default_image_thumb.jpg', 'thumb')
            ->useFallbackPath(public_path('/images/default_image_thumb.jpg'), 'thumb');

        $this->addMediaCollection('files') //Файлы
            ->useDisk('documentation')
            ->singleFile()
            ->acceptsMimeTypes(mimeTypes: ['application/pdf']);
    }

    /**
     * Возвращает бренд производителя документации
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    /**
     * Возвращает тип документации
     */
    public function type()
    {
        return $this->belongsTo(DocumentationType::class, 'type_id');
    }
}
