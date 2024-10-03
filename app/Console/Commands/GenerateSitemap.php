<?php

namespace App\Console\Commands;

use App\Models\Filter;
use App\Models\ProductSubtype;
use Illuminate\Console\Command;
use App\Models\Blog;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\ProductType;


use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Crawler\Crawler;
use Illuminate\Support\Facades\Log;


class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Генерация файла sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->line('Генерация файла sitemap начата');
        $start = microtime(true);
        Log::info('Генерация файла sitemap начата');
        $path = public_path('sitemap.xml');


        // $count = Product::query()
        //     ->where('active', true)
        //     ->count();
        // $chunk = 10000;
        // $index = 1;
        // for ($i = 0; $i < $count; ) {
        //     $lazy = Product::query()
        //         ->where('active', true)
        //         ->lazy()
        //         ->skip($i)
        //         ->take($chunk);

        //     $i += $chunk;
        //     Sitemap::create()
        //         ->add($lazy)
        //         ->writeToFile(public_path("products_$index.xml"));
        //         // ->writeToFile(public_path('sitemap.xml'));

        //     $index++;
        // }

        Sitemap::create()
            ->add(News::published()->get(['id',   'slug', 'updated_at']))
            // ->add(Blog::all(['id', 'old_link', 'slug', 'updated_at']))
            // ->add(Portfolio::all(['id', 'old_link', 'slug', 'updated_at']))
            // ->add(Vendor::all(['id', 'old_link', 'slug', 'updated_at']))
              ->add(Product::published()->get(['id',   'slug', 'updated_at']))
            // ->add(ProductType::all(['id', 'old_link', 'slug', 'updated_at']))
            // ->add(ProductSubtype::all(['id', 'old_link', 'slug', 'updated_at']))
            // ->add(Filter::all(['id', 'old_link', 'slug', 'updated_at']))
            ->writeToFile(public_path('sitemap.xml'));
        $this->line('Генерация файла sitemap закончена');
        $this->line('Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.');
        Log::info('Генерация файла sitemap закончена');
        Log::info('Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' сек.');
    }

}
