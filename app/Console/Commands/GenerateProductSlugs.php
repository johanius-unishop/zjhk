<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Str;

class GenerateProductSlugs extends Command
{
    protected $signature = 'products:generate-slugs';
    protected $description = 'Generate slugs for products without slugs';

    public function handle()
    {
        $productsWithoutSlug = Product::whereNull('slug')->get();
        foreach ($productsWithoutSlug as $product) {
            $product->save(); // При сохранении модели slug будет сгенерирован автоматически
        }

        $this->info('Slugs generated successfully!');
    }
}
