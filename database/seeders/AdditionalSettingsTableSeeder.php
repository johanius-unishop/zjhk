<?php

namespace Database\Seeders;

use App\Models\AdditionalSetting;
use Illuminate\Database\Seeder;

class AdditionalSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        // Очистка таблицы перед добавлением данных
        AdditionalSetting::truncate(); // Альтернатива удалению всех записей
        // Массив данных для вставки
        $elements = [
        
            [
                'id' => 1,
                'group' => 'priceListImport',
                'name' => 'startRowData',
                'value' => '3',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 2,
                'group' => 'priceListImport',
                'name' => 'vendorColumn',
                'value' => 'A',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 3,
                'group' => 'priceListImport',
                'name' => 'modelColumn',
                'value' => 'B',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 4,
                'group' => 'priceListImport',
                'name' => 'articleColumn',
                'value' => 'C',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 5,
                'group' => 'priceListImport',
                'name' => 'priceColumn',
                'value' => 'D',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 6,
                'group' => 'priceListImport',
                'name' => 'currencyColumn',
                'value' => 'E',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 7,
                'group' => 'priceListImport',
                'name' => 'moqColumn',
                'value' => 'F',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 8,
                'group' => 'priceListImport',
                'name' => 'piecesPerPackColumn',
                'value' => 'G',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 9,
                'group' => 'priceListImport',
                'name' => 'minStockColumn',
                'value' => 'H',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 10,
                'group' => 'priceListImport',
                'name' => 'priorityColumn',
                'value' => 'I',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 11,
                'group' => 'orderImport',
                'name' => 'orderNameCell',
                'value' => 'A1',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 12,
                'group' => 'orderImport',
                'name' => 'startRowData',
                'value' => '3',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 13,
                'group' => 'orderImport',
                'name' => 'modelColumn',
                'value' => 'A',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
            [
                'id' => 14,
                'group' => 'orderImport',
                'name' => 'quantityColumn',
                'value' => 'B',
                'created_at' => '2024-09-15 15:27:02',
                'updated_at' => '2024-09-15 15:27:02',
            ],
        ];

        // Создание записей с использованием массового присвоения
        foreach ($elements as $element) {
            AdditionalSetting::create($element);
        }

    }
}