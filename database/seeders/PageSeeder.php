<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use App\Models\Page;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artisan::call('cache:clear');

        Page::create(['name' => 'Юридическая информация', 'slug' =>  'justice' , 'body_description' => '<p>Привет!</p>', 'active' => 1, 'protected' => 1]);
        Page::create(['name' => 'Магазинам', 'slug' =>  'to-shops' , 'body_description' => '<p>Привет!</p>', 'active' => 1, 'protected' => 1]);
        Page::create(['name' => 'Строительным компаниям', 'slug' =>  'to-builders' , 'body_description' => '<p>Привет!</p>', 'active' => 1, 'protected' => 1]);
        Page::create(['name' => 'Сроки поставки', 'slug' =>  'delivery-time' , 'body_description' => '<p>Привет!</p>', 'active' => 1, 'protected' => 1]);
        Page::create(['name' => 'Политика обработки персональных данных', 'slug' =>  'privacy' , 'body_description' => '<p>Привет!</p>', 'active' => 1, 'protected' => 1]);

    }
}
