<?php

namespace App\PathGenerators;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CountryPathGenerator implements PathGenerator
{
    /**
     * Возвращаем путь для сохранения медиафайлов страны.
     *
     * @param Model $model Модель страны.
     * @return string Путь для сохранения медиафайлов.
     */
    public function getPath(Model $model): string
    {
        /** @var \App\Models\Country $model */
        return "{$model->model->name_in_english}/{$model->collection_name}/";
    }

    /**
     * Возвращаем путь для сохранения преобразованных медиафайлов страны.
     *
     * @param Model $model Модель страны.
     * @return string Путь для сохранения преобразованных медиафайлов.
     */
    public function getPathForConversions(Model $model): string
    {
        /** @var \App\Models\Country $model */
        return "{$model->model->name_in_english}/{$model->collection_name}/conversions/";
    }

       /**
     * Возвращаем путь для адаптивных изображений.
     *
     * @param Model $model Модель страны.
     * @return string Путь для сохранения адаптивных изображений.
     */
    public function getPathForResponsiveImages(Model $model): string
    {
        /** @var \App\Models\Country $model */
        return "{$model->model->name_in_english}/{$model->collection_name}/responsive/";
    }
}