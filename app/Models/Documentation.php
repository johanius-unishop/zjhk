<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Facades\DB;


class Documentation extends Model implements HasMedia
{

    use InteractsWithMedia;
    protected $table = "documentation";

    protected $fillable = [
        'title',
        'text',
        'vendor_id',
        'type_id',
        'order_column',
        'homepage_visible',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('jpeg-images')
            ->fit(FIT::Fill, 220, 220)   // Сохраняем пропорцию, максимум ширина 220 или высота 220px
            ->format('jpg')                              // Устанавливаем формат сохранения изображения
            ->performOnCollections('images')             // Применяется ко всей коллекции 'images'
            ->nonQueued();

        $this->addMediaConversion('webp-images')
            ->fit(FIT::Fill, 220, 220)   // Сохраняем пропорцию, максимум ширина 220 или высота 220px
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

    public function up(): bool
    {
        // Получаем предыдущий документ (тот, что выше текущего)
        $previousDoc = self::where('order_column', '<', $this->order_column)
            ->orderByDesc('order_column')
            ->first();

        if ($previousDoc) {
            // Меняем местами порядок сортировки
            DB::transaction(function () use ($previousDoc) {
                $tempOrder = $previousDoc->order_column;
                $previousDoc->order_column = $this->order_column;
                $this->order_column = $tempOrder;

                $previousDoc->save();
                $this->save();
            });

            return true;
        }

        return false;
    }

    public function down(): bool
    {
        // Получаем следующий документ (тот, что ниже текущего)
        $nextDoc = self::where('order_column', '>', $this->order_column)
            ->orderBy('order_column')
            ->first();

        if ($nextDoc) {
            // Меняем местами порядок сортировки
            DB::transaction(function () use ($nextDoc) {
                $tempOrder = $nextDoc->order_column;
                $nextDoc->order_column = $this->order_column;
                $this->order_column = $tempOrder;

                $nextDoc->save();
                $this->save();
            });

            return true;
        }

        return false;
    }
}
