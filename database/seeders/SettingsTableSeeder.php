<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting; // Подключаем модель Setting

class SettingsTableSeeder extends Seeder
{
    /**
     * Заполняем таблицу settings
     *
     * @return void
     */
    public function run()
    {
        // Очищаем таблицу перед добавлением данных
        Setting::truncate(); // Альтернатива удалению всех записей

        // Массив данных для вставки
        $settings = [
            [
                'id' => 1,
                'group' => 'company',
                'key' => 'name',
                'value' => 'КЕВТЕК',
                'description' => 'Название компании',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'group' => 'company',
                'key' => 'devise',
                'value' => 'Альтернатива есть!',
                'description' => 'Девиз (слоган)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'group' => 'company',
                'key' => 'phone',
                'value' => '+7(812)200-82-75',
                'description' => 'Телефон компании',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'group' => 'company',
                'key' => 'phone_2',
                'value' => '+7(931)366-86-87',
                'description' => 'Телефон компании 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'group' => 'company',
                'key' => 'phone_3',
                'value' => '+7(921)365-19-14',
                'description' => 'Телефон компании 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'group' => 'company',
                'key' => 'email',
                'value' => 'info@kevtek.ru',
                'description' => 'Адрес электронной почты',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Создаем записи с использованием массового присвоения
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
