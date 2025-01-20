<?php

namespace App\PathGenerators;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class VendorPdfCatalogPathGenerator implements PathGenerator
{
    /**
     * Возвращаем путь для сохранения медиафайлов каталогов производителя.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения медиафайлов.
     */
    public function getPath(Model $model): string
    {
        /** @var \App\Models\VendorPdfCatalog $model */
        if (!empty($model->model->vendor->short_name)){
            return "{$model->model->vendor->short_name}/catalogs/{$model->collection_name}/";
        }
        else{
            return "{$model->model->vendor->name}/catalogs/{$model->collection_name}/";
        }
    }

    /**
     * Возвращаем путь для сохранения преобразованных медиафайлов производителя.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения преобразованных медиафайлов.
     */
    public function getPathForConversions(Model $model): string
    {
        /** @var \App\Models\VendorPdfCatalog $model */
        if (!empty($model->model->vendor->short_name)){
            return "{$model->model->vendor->short_name}/catalogs/{$model->collection_name}/conversions/";
        }
        else{
            return "{$model->model->vendor->name}/catalogs/{$model->collection_name}/conversions/";
        }
    }

       /**
     * Возвращаем путь для адаптивных изображений.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения адаптивных изображений.
     */
    public function getPathForResponsiveImages(Model $model): string
    {
        /** @var \App\Models\VendorPdfCatalog $model */
        if (!empty($model->model->vendor->short_name)){
            return "{$model->model->vendor->short_name}/catalogs/{$model->collection_name}/responsive/";
        }
        else{
            return "{$model->model->vendor->name}/catalogs/{$model->collection_name}/responsive/";
        }  
    }
}