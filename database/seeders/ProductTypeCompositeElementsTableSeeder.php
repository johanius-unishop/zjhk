<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductTypeCompositeElement; // Предполагаемая модель

class ProductTypeCompositeElementsTableSeeder extends Seeder
{
    /**
     * Заполнение таблицы product_type_composite_elements
     *
     * @return void
     */
    public function run()
    {
        // Очистка таблицы перед добавлением данных
        ProductTypeCompositeElement::truncate(); // Альтернатива удалению всех записей

        // Массив данных для вставки
        $elements = [
            [
                'id' => 1,
                'product_type_id' => 16,
                'name' => 'Вилка',
                'order_column' => 1,
            ],
            [
                'id' => 2,
                'product_type_id' => 16,
                'name' => 'Розетка',
                'order_column' => 2,
            ],
            [
                'id' => 3,
                'product_type_id' => 39,
                'name' => 'Контактная вставка',
                'order_column' => 1,
            ],
            [
                'id' => 4,
                'product_type_id' => 39,
                'name' => 'Корпус',
                'order_column' => 2,
            ],
            [
                'id' => 5,
                'product_type_id' => 39,
                'name' => 'Гермоввод',
                'order_column' => 3,
            ],
            [
                'id' => 6,
                'product_type_id' => 38,
                'name' => 'Вилка',
                'order_column' => 1,
            ],
            [
                'id' => 7,
                'product_type_id' => 38,
                'name' => 'Розетка',
                'order_column' => 2,
            ],
            [
                'id' => 8,
                'product_type_id' => 38,
                'name' => 'Корпус',
                'order_column' => 3,
            ],
            [
                'id' => 9,
                'product_type_id' => 38,
                'name' => 'Корпус',
                'order_column' => 4,
            ],
            [
                'id' => 10,
                'product_type_id' => 38,
                'name' => 'Гермоввод',
                'order_column' => 5,
            ],
            [
                'id' => 11,
                'product_type_id' => 17,
                'name' => 'Контактная вставка',
                'order_column' => 1,
            ],
            [
                'id' => 12,
                'product_type_id' => 17,
                'name' => 'Контактная вставка',
                'order_column' => 2,
            ],
        ];

        // Создание записей с использованием массового присвоения
        foreach ($elements as $element) {
            ProductTypeCompositeElement::create($element);
        }
    }
}
