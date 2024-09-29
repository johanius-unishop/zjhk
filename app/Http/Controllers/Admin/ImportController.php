<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// use App\Models\Blog;
// use App\Models\News;
// use App\Models\Page;
// use App\Models\Product;
// use App\Models\Consulting;
// use App\Models\Vendor;
// use App\Models\PriceRequest;
// use App\Models\ProductType;
// use App\Models\Opinion;
// use App\Models\Order;
// use App\Models\Drawing;
// use App\Models\Subscribe;
// use App\Models\ModelRequest;

// use App\Http\Requests\Admin\ImportProductFileRequest;

use App\Models\Product;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use DOMDocument;
use Illuminate\Support\Facades\Storage;
use App\Services\CsvService;
use App\Jobs\AttachFilesToProduct;

use App\Jobs\AttachImagesToProduct;
class ImportController extends Controller
{


    public function index()
    {
        //
        // $news_count = News::count();
        // $blog_count = Blog::count();
        // $page_count = Page::count();

        // return view('admin.content.index', compact('news_count', 'blog_count', 'page_count', 'portfolio_count', 'opinion_count'));
        return view('admin.import.index');


    }

    public function import_product_images()
    {
        \Debugbar::disable();
        $images = DB::table('product_images')->orderBy('product_id', 'asc')
            ->orderBy('sorting', 'asc')->get();
        $i      = 0;
        foreach ($images as $file) {
            // dd($file);
            try {
                $i++;
                $product = Product::findOrFail($file->product_id);
                AttachImagesToProduct::dispatch($product, 'images', $file->image);
            }
            catch (\Throwable $th) {
                dd($file, );
                throw $th;
            }
        }

        echo ('Обработано ' . $i . ' товаров ');
    }

    public function import_product_files()
    {
        \Debugbar::disable();
        $types = [
            1 => 'specifications',
            2 => 'dimensionalDrawing',
            3 => 'overviewInformation',
        ];
        $i      = 0;
        $files = DB::table('product_pdfs')->get();
        foreach ($files as $file) {
            try {

                $i++;
                $product = Product::findOrFail($file->product_id);
                AttachFilesToProduct::dispatch($product, $types[$file->product_pdf_type_id], $file->pdf);
            }
            catch (\Throwable $th) {
                dd($file, $types[$file->product_pdf_type_id]);
                throw $th;
            }
        }
        echo ('Обработано ' . $i . ' товаров ');

    }

    public function imagesUpload(Request $request)
    {

        if ($request->file('image')) {
            $file = $request->file('image');
            try {
                $fileName = time() . '_' . $file->getClientOriginalName();
                Storage::disk('images')->putFileAs('images/editor/', $file, $fileName);
                $filePath = Storage::disk('images')->url('/images/editor/' . $fileName);
                echo $filePath;

            }
            catch (\Throwable $th) {
                echo '<br>' . $th->getMessage();
                Log::error($th->getMessage());
            }

        }


    }

}
