<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Country;
use App\Models\BrokenFile;



class CheckMediaFilesCommand extends Command
{
    protected $signature = 'check:media-files';

    protected $description = 'Проверка доступности медиафайлов.';

    public function handle()
    {
        $products = Product::all();
        $vendors = Vendor::all();
        $countries = Country::all();

        foreach ($products as $product) {
            $medias = $product->getMedia("*");
            foreach ($medias as $media) {
                $fullPathOnDisk = $media->getPath();
                // Проверяем существование файла
                if (!Storage::disk(config('products'))->exists($fullPathOnDisk)) {
                    // Если файл отсутствует, записываем информацию в таблицу broken_files
                    BrokenFile::create([
                        'model_type' => 'Product',
                        'model_id' => $product->id,
                        'model_name' => $product->name,
                        'file_name' => $media->file_name,
                    ]);
                } else {

                }
            }
        }
    }
}