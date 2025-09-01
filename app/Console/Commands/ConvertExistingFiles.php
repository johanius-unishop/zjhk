<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ConvertExistingFiles extends Command
{
    protected $signature = 'media:convert';
    protected $description = 'Apply media conversions to existing files.';

    public function handle()
    {
        foreach (Product::all() as $model) { // проходим по каждой модели вашего типа
            foreach ($model->getMedia() as $mediaItem) { // получаем каждый прикрепленный медиафайл
                if (!$mediaItem->hasGeneratedConversion('webp_thumb')) { // проверяем наличие конверсии
                    $mediaItem->regenerateConversion('webp_thumb');
                    $this->info('Сгенерировано изображение для товара {{ $model->name }}');
                }
            }
        }
        $this->info('Все существующие медиа были сконвертированы.');
    }
}
