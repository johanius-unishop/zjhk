<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Заполнение таблицы стран данными.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Австрия'],
            ['name' => 'Беларусь'],
            ['name' => 'Бельгия'],
            ['name' => 'Китай'],
            ['name' => 'Чехия'],
            ['name' => 'Дания'],
            ['name' => 'Финляндия'],
            ['name' => 'Франция'],
            ['name' => 'Германия'],
            ['name' => 'Индия'],
            ['name' => 'Италия'],
            ['name' => 'Япония'],
            ['name' => 'Россия'],
            ['name' => 'Сербия'],
            ['name' => 'Испания'],
            ['name' => 'Турция'],
        ]);
    }
}
