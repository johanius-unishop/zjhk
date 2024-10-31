<?php

namespace App\Console\Commands;

use App\Models\Filter;
use App\Models\ProductSubtype;
use Illuminate\Console\Command;
use App\Models\Blog;
use App\Models\News;
use App\Models\Article;
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
        $startTime = microtime(true);
        Log::info('Генерация файла sitemap начата');

        $sitemapPath = public_path('sitemap.xml');

        $news = News::published()->get(['id', 'slug', 'updated_at']);
        $articles = Article::published()->get(['id', 'slug', 'updated_at']);
        $products = Product::published()->get(['id', 'slug', 'updated_at']);

        Sitemap::create()
            ->add($news)
            ->add($articles)
            ->add($products)
            ->writeToFile($sitemapPath);

        $executionTime = round(microtime(true) - $startTime, 4);

        $this->line('Генерация файла sitemap закончена');
        $this->line("Время выполнения скрипта: {$executionTime} сек.");

        Log::info('Генерация файла sitemap закончена');
        Log::info("Время выполнения скрипта: {$executionTime} сек.");
    }

}
