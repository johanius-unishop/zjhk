<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\News;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds. php artisan db:seed --class=NewsSeeder
     */
    public function run(): void
    {
        //
        $faker = Faker::create('ru_RU');


        // $product_count = News::count();
        foreach (range(1, 100) as $i) {
            News::create([
                'name' =>  $faker->sentence(5 ),
                'slug' => $faker->slug,
                'short_description' => $faker->realText(120, 5),
                'body_description' => $faker->realText(2000),
                'published' =>  rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

