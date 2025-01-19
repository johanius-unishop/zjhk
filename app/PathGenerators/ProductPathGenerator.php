<?php

namespace App\PathGenerators;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class ProductPathGenerator implements PathGenerator
{
    /**
     * Возвращаем путь для сохранения медиафайлов товаров.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения медиафайлов.
     */
    public function getPath(Model $model): string
    {
        /** @var \App\Models\Product $model */

        $vendorName = $model->model->vendor->short_name ?? $model->model->vendor->short_name;
        if (empty($vendorName)){
            $vendorName = "unknown_vendor";
        }
        $article = $model->model->article ?: '';
        $modelName = $model->model->name ?: '';
        $collectionName = $model->collection_name ?: '';

        $path = "{$vendorName}/";

        if ($article && $modelName) {
            $path .= "{$article}_{$modelName}/";
        } elseif ($modelName) {
            $path .= "{$modelName}/";
        } else {
            $path .= "{$article}/";
        }

        $path .= "{$collectionName}/";

        return $path;
    }

    /**
     * Возвращаем путь для сохранения преобразованных медиафайлов производителя.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения преобразованных медиафайлов.
     */
    public function getPathForConversions(Model $model): string
    {
        /** @var \App\Models\Product $model */
        $vendorName = $model->model->vendor->short_name ?? $model->model->vendor->short_name;
        if (empty($vendorName)){
            $vendorName = "unknown_vendor";
        }
        $article = $model->model->article ?: '';
        $modelName = $model->model->name ?: '';
        $collectionName = $model->collection_name ?: '';

        $path = "{$vendorName}/";

        if ($article && $modelName) {
            $path .= "{$article}_{$modelName}/";
        } elseif ($modelName) {
            $path .= "{$modelName}/";
        } else {
            $path .= "{$article}/";
        }

        $path .= "{$collectionName}/conversions/";

        return $path;
    }

       /**
     * Возвращаем путь для адаптивных изображений.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения адаптивных изображений.
     */
    public function getPathForResponsiveImages(Model $model): string
    {
        /** @var \App\Models\Product $model */
        $vendorName = $model->model->vendor->short_name ?? $model->model->vendor->short_name;
        if (empty($vendorName)){
            $vendorName = "unknown_vendor";
        }
        $article = $model->model->article ?: '';
        $modelName = $model->model->name ?: '';
        $collectionName = $model->collection_name ?: '';

        $path = "{$vendorName}/";

        if ($article && $modelName) {
            $path .= "{$article}_{$modelName}/";
        } elseif ($modelName) {
            $path .= "{$modelName}/";
        } else {
            $path .= "{$article}/";
        }

        $path .= "{$collectionName}/responsive/";

        return $path;  
    }
}