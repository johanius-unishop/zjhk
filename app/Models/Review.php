<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\PathGenerators\ReviewPathGenerator;

class Review extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'review_text',
        'advantages',
        'disadvantages',
        'admin_reply',
        'admin_replied_at'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photos')
            ->useDisk('reviews')
            ->withResponsiveImages()
            ->singleFile(false)
            ->useFallbackUrl('/images/default_image.jpg')
            ->useFallbackPath(public_path('/images/default_image.jpg'));
    }

    protected function getPath(Model $model): string
    {
        return app(ReviewPathGenerator::class)->getPath($model);
    }

    protected function getPathForConversions(Model $model): string
    {
        return app(ReviewPathGenerator::class)->getPathForConversions($model);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Получение статуса наличия ответа на отзыв
    public function isReplied(): bool
    {
        return !is_null($this->admin_reply);
    }
}
