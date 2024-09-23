<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesTableSeederOLD extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 26,
                'parent_id' => NULL,
                'name' => 'Промышленные прямоугольные разъемы',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 27,
                'parent_id' => 26,
                'name' => 'Контактные вставки',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 28,
                'parent_id' => 26,
                'name' => 'Корпусы',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 29,
                'parent_id' => 26,
                'name' => 'Обжимные контакты',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 30,
                'parent_id' => 26,
                'name' => 'Аксессуары',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 31,
                'parent_id' => 26,
                'name' => 'Сальники',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 33,
                'parent_id' => 27,
                'name' => 'Серия HA',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 34,
                'parent_id' => 27,
                'name' => 'Серия HE',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 35,
                'parent_id' => 27,
                'name' => 'Серия HEE',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 36,
                'parent_id' => 27,
                'name' => 'Серия HD',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 37,
                'parent_id' => 27,
                'name' => 'Серия HDD',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 38,
                'parent_id' => 27,
                'name' => 'Серия HSB',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 =>
            array (
                'id' => 39,
                'parent_id' => 27,
                'name' => 'Серия HK',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 =>
            array (
                'id' => 40,
                'parent_id' => 27,
                'name' => 'Серия HEAV',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 =>
            array (
                'id' => 41,
                'parent_id' => 27,
                'name' => 'Серия HM',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 =>
            array (
                'id' => 42,
                'parent_id' => 27,
                'name' => 'Серия HQ',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 =>
            array (
                'id' => 43,
                'parent_id' => 28,
                'name' => 'Типоразмер 3A - пластик',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 =>
            array (
                'id' => 44,
                'parent_id' => 28,
                'name' => 'Типоразмер 3A - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 =>
            array (
                'id' => 45,
                'parent_id' => 28,
                'name' => 'Типоразмер 10A - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 =>
            array (
                'id' => 46,
                'parent_id' => 28,
                'name' => 'Типоразмер 16A - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 =>
            array (
                'id' => 47,
                'parent_id' => 28,
                'name' => 'Типоразмер 32A - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 =>
            array (
                'id' => 48,
                'parent_id' => 28,
                'name' => 'Типоразмер 6B - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 =>
            array (
                'id' => 49,
                'parent_id' => 28,
                'name' => 'Типоразмер 10B - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 =>
            array (
                'id' => 50,
                'parent_id' => 28,
                'name' => 'Типоразмер 16B - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 =>
            array (
                'id' => 51,
                'parent_id' => 28,
                'name' => 'Типоразмер 24B - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 =>
            array (
                'id' => 52,
                'parent_id' => 28,
                'name' => 'Типоразмер 32B - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 =>
            array (
                'id' => 53,
                'parent_id' => 28,
                'name' => 'Типоразмер 48B - металл',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 =>
            array (
                'id' => 54,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 5 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 =>
            array (
                'id' => 55,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 10 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 =>
            array (
                'id' => 56,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 16 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 =>
            array (
                'id' => 57,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 40 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 =>
            array (
                'id' => 58,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 70 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 =>
            array (
                'id' => 59,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 100 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 =>
            array (
                'id' => 60,
                'parent_id' => 29,
                'name' => 'Обжимные контакты - 200 Ампер',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 =>
            array (
                'id' => 61,
                'parent_id' => 31,
                'name' => 'Пластиковые сальники',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 =>
            array (
                'id' => 62,
                'parent_id' => 31,
                'name' => 'Металлические сальники',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 =>
            array (
                'id' => 64,
                'parent_id' => 31,
                'name' => 'Металлические контргайки',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 =>
            array (
                'id' => 65,
                'parent_id' => 31,
                'name' => 'Пластиковые переходники',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 =>
            array (
                'id' => 66,
                'parent_id' => 31,
                'name' => 'Металлические переходники',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 =>
            array (
                'id' => 67,
                'parent_id' => 31,
                'name' => 'Футорки пластиковые',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 =>
            array (
                'id' => 68,
                'parent_id' => 31,
                'name' => 'Футорки металлические',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 =>
            array (
                'id' => 69,
                'parent_id' => 31,
                'name' => 'Пластиковые заглушки круглые',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 =>
            array (
                'id' => 70,
                'parent_id' => 31,
                'name' => 'Металлические заглушки шестигранные',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 =>
            array (
                'id' => 71,
                'parent_id' => 31,
            'name' => 'Пластиковые муфты для металлорукавов (быстрого соединения)',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 =>
            array (
                'id' => 72,
                'parent_id' => 31,
                'name' => 'Муфты для металлорукавов металлические прямые',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 =>
            array (
                'id' => 73,
                'parent_id' => 31,
                'name' => 'Металлические сальники для многожильного кабеля',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 =>
            array (
                'id' => 74,
                'parent_id' => 31,
                'name' => 'Металлические сальники с заземлением EMC',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 =>
            array (
                'id' => 75,
                'parent_id' => 31,
            'name' => 'Сальники с внешней разгрузкой от натяжения (с двойной фиксацией)',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 =>
            array (
                'id' => 79,
                'parent_id' => 26,
            'name' => 'Полукомплекты (кожух + вставка)',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 =>
            array (
                'id' => 89,
                'parent_id' => 26,
                'name' => 'Комплекты промышленных разъемов',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 =>
            array (
                'id' => 90,
                'parent_id' => 26,
                'name' => 'Комплекты контактных вставок',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 =>
            array (
                'id' => 91,
                'parent_id' => 79,
                'name' => 'Полукомплекты серии HA',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 =>
            array (
                'id' => 92,
                'parent_id' => 91,
                'name' => 'Полукомплекты на основе контактных вставок HA-003',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 =>
            array (
                'id' => 93,
                'parent_id' => 91,
                'name' => 'Полукомплекты на основе контактных вставок HA-004',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 =>
            array (
                'id' => 94,
                'parent_id' => 91,
                'name' => 'Полукомплекты на основе контактных вставок HA-010',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 =>
            array (
                'id' => 95,
                'parent_id' => 91,
                'name' => 'Полукомплекты на основе контактных вставок HA-016',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 =>
            array (
                'id' => 96,
                'parent_id' => 91,
                'name' => 'Полукомплекты на основе контактных вставок HA-032',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 =>
            array (
                'id' => 97,
                'parent_id' => 79,
                'name' => 'Полукомплекты серии HE',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 =>
            array (
                'id' => 98,
                'parent_id' => 97,
                'name' => 'Полукомплекты на основе контактных вставок HE-006',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 =>
            array (
                'id' => 99,
                'parent_id' => 97,
                'name' => 'Полукомплекты на основе контактных вставок HE-010',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 =>
            array (
                'id' => 100,
                'parent_id' => 97,
                'name' => 'Полукомплекты на основе контактных вставок HE-016',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 =>
            array (
                'id' => 101,
                'parent_id' => 97,
                'name' => 'Полукомплекты на основе контактных вставок HE-024',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 =>
            array (
                'id' => 102,
                'parent_id' => 97,
                'name' => 'Полукомплекты на основе контактных вставок HE-032',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 =>
            array (
                'id' => 103,
                'parent_id' => 97,
                'name' => 'Полукомплекты на основе контактных вставок HE-048',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 =>
            array (
                'id' => 130,
                'parent_id' => 79,
                'name' => 'Полукомплекты серии HSB',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 =>
            array (
                'id' => 131,
                'parent_id' => 130,
                'name' => 'Полукомплекты на основе контактных вставок HSBS-004',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 =>
            array (
                'id' => 132,
                'parent_id' => 130,
                'name' => 'Полукомплекты на основе контактных вставок HSB-004',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 =>
            array (
                'id' => 133,
                'parent_id' => 130,
                'name' => 'Полукомплекты на основе контактных вставок HSB-006',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 =>
            array (
                'id' => 134,
                'parent_id' => 130,
                'name' => 'Полукомплекты на основе контактных вставок HSB-012',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 =>
            array (
                'id' => 135,
                'parent_id' => 79,
                'name' => 'Полукомплекты серии HK',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 =>
            array (
                'id' => 138,
                'parent_id' => 135,
                'name' => 'Полукомплекты на основе контактных вставок HK-004/0',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 =>
            array (
                'id' => 139,
                'parent_id' => 135,
                'name' => 'Полукомплекты на основе контактных вставок HK-004/2',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 =>
            array (
                'id' => 140,
                'parent_id' => 135,
                'name' => 'Полукомплекты на основе контактных вставок HWK-006/6',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 =>
            array (
                'id' => 144,
                'parent_id' => 135,
                'name' => 'Полукомплекты на основе контактных вставок HK-006/6',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 =>
            array (
                'id' => 145,
                'parent_id' => 135,
                'name' => 'Полукомплекты на основе контактных вставок HK-008/0',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 =>
            array (
                'id' => 146,
                'parent_id' => 135,
                'name' => 'Полукомплекты на основе контактных вставок HK-004/8',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 =>
            array (
                'id' => 155,
                'parent_id' => 89,
                'name' => 'Комплекты серии HA',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 =>
            array (
                'id' => 156,
                'parent_id' => 89,
                'name' => 'Комплекты серии HE',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 =>
            array (
                'id' => 157,
                'parent_id' => 89,
                'name' => 'Комплекты серии HSB',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 =>
            array (
                'id' => 158,
                'parent_id' => 89,
                'name' => 'Комплекты серии HK',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 =>
            array (
                'id' => 159,
                'parent_id' => 155,
                'name' => 'Комплекты HA-003',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 =>
            array (
                'id' => 160,
                'parent_id' => 155,
                'name' => 'Комплекты HA-004',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 =>
            array (
                'id' => 161,
                'parent_id' => 155,
                'name' => 'Комплекты HA-010',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 =>
            array (
                'id' => 162,
                'parent_id' => 155,
                'name' => 'Комплекты HA-016',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 =>
            array (
                'id' => 163,
                'parent_id' => 155,
                'name' => 'Комплекты HA-032',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 =>
            array (
                'id' => 164,
                'parent_id' => 156,
                'name' => 'Комплекты HE-006',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 =>
            array (
                'id' => 165,
                'parent_id' => 156,
                'name' => 'Комплекты HE-010',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 =>
            array (
                'id' => 166,
                'parent_id' => 156,
                'name' => 'Комплекты HE-016',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 =>
            array (
                'id' => 167,
                'parent_id' => 156,
                'name' => 'Комплекты HE-024',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 =>
            array (
                'id' => 168,
                'parent_id' => 156,
                'name' => 'Комплекты HE-032',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 =>
            array (
                'id' => 169,
                'parent_id' => 156,
                'name' => 'Комплекты HE-048',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 =>
            array (
                'id' => 170,
                'parent_id' => 157,
                'name' => 'Комплекты HSBS-004',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 =>
            array (
                'id' => 171,
                'parent_id' => 157,
                'name' => 'Комплекты HSB-004',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 =>
            array (
                'id' => 172,
                'parent_id' => 157,
                'name' => 'Комплекты HSB-006',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 =>
            array (
                'id' => 173,
                'parent_id' => 157,
                'name' => 'Комплекты HSB-012',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 =>
            array (
                'id' => 174,
                'parent_id' => 158,
                'name' => 'Комплекты HK-004/0',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 =>
            array (
                'id' => 175,
                'parent_id' => 158,
                'name' => 'Комплекты HK-004/2',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 =>
            array (
                'id' => 176,
                'parent_id' => 158,
                'name' => 'Комплекты HWK-006/6',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 =>
            array (
                'id' => 177,
                'parent_id' => 158,
                'name' => 'Комплекты HK-006/6',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 =>
            array (
                'id' => 178,
                'parent_id' => 158,
                'name' => 'Комплекты HK-008/0',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 =>
            array (
                'id' => 179,
                'parent_id' => 158,
                'name' => 'Комплекты HK-004/8',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 =>
            array (
                'id' => 180,
                'parent_id' => 31,
                'name' => 'Пластиковые контргайки',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 =>
            array (
                'id' => 181,
                'parent_id' => 30,
                'name' => 'Система кодирования',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 =>
            array (
                'id' => 182,
                'parent_id' => 30,
                'name' => 'Крепежные винты',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 =>
            array (
                'id' => 183,
                'parent_id' => 30,
                'name' => 'Монтажные и стыковочные рамки',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 =>
            array (
                'id' => 184,
                'parent_id' => 30,
                'name' => 'Инструмент для обжима',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 =>
            array (
                'id' => 185,
                'parent_id' => 30,
                'name' => 'Инструмент для установки и извлечения контактов',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 =>
            array (
                'id' => 186,
                'parent_id' => 91,
                'name' => 'Полукомплекты RJ45',
                'description' => '',

                'published' => 0,
                'order_column' => 0,
                'slug' => '',
                'custom_title' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));

        Category::fixTree();
        $categories = Category::all() ;

        \DB::beginTransaction();
        foreach ($categories as $category) {
            $category->slug = Str::slug($category->name);
            $category->save();
        }
        \DB::commit();
    }
}
