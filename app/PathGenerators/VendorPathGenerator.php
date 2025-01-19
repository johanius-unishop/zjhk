<?php

namespace App\PathGenerators;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class VendorPathGenerator implements PathGenerator
{
    /**
     * Возвращаем путь для сохранения медиафайлов производителя.
     *
     * @param Model $model Модель производителя.
     * @return string Путь для сохранения медиафайлов.
     */
    public function getPath(Model $model): string
    {
        /** @var \App\Models\Vendor $model */
        if (!empty($model->model->short_name)){
            return "{$model->model->short_name}/{$model->collection_name}/";
        }
        else{
            return "{$model->model->name}/{$model->collection_name}/";
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
        /** @var \App\Models\Vendor $model */
        if (!empty($model->model->short_name)){
            return "{$model->model->short_name}/{$model->collection_name}/conversions/";
        }
        else{
            return "{$model->model->name}/{$model->collection_name}/conversions/";
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
        /** @var \App\Models\Vendor $model */
        if (!empty($model->model->short_name)){
            return "{$model->model->short_name}/{$model->collection_name}/responsive/";
        }
        else{
            return "{$model->model->name}/{$model->collection_name}/responsive/";
        }  
    }
}