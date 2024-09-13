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

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use DOMDocument;
use Illuminate\Support\Facades\Storage;
use App\Services\CsvService;
class ContentController extends Controller
{

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function index()
    {
        //
        // $news_count = News::count();
        // $blog_count = Blog::count();
        // $page_count = Page::count();
        // // $size            = disk_free_space("/");
        // // $df              = format_bytes($size);
        // $portfolio_count = Portfolio::count();

        // $opinion_count = Opinion::count();
        // return view('admin.content.index', compact('news_count', 'blog_count', 'page_count', 'portfolio_count', 'opinion_count'));
        return view('admin.content.index' );


        // return view('admin.content.index', compact('news_count', 'blog_count', 'page_count', 'portfolio_count', 'df'));
    }

    public function import()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $news_count             = News::count();
        $blog_count             = Blog::count();
        $page_count             = Page::count();
        $vendor_count           = Vendor::count();
        $product_count          = Product::count();
        $portfolio_count        = Portfolio::count();
        $product_location_count = 0; //
        $product_class_count    = 0; // ProductClass::count();
        $product_subclass_count = 0; // Product::count();
        // $price_segment_count    =0 ; // Product::count();
        $product_subclass_count = Product::count();
        $price_segment_count    = Product::count();
        $vendor_count           = Vendor::count();
        $product_count          = Product::count();
        $product_type_count     = ProductType::count();
        return view('admin.import.index', compact('news_count', 'blog_count', 'page_count', 'vendor_count', 'product_count', 'portfolio_count', 'product_type_count', 'product_class_count', 'product_subclass_count', 'price_segment_count', 'vendor_count', 'product_count'));
    }

    public function import_file()
    {
        $product_count = Product::count();
        return view('admin.import.from_file', compact('product_count'));
    }
    public function from_file(ImportProductFileRequest $request)
    {
        // dd($request->all());

        if (!$request->hasFile('file')) {
            session()->flash('error', 'Укажите файл');
            return redirect()->back()->withInput();

        }
        $file = $request->file('file');

        try {
            // if (!$request->filled('test')) {
            //     session()->flash('error', 'Указан тестовый режим загрузки');
            //     return redirect()->back()->withInput();

            // }

            $data = CsvService::readCsvFile($file);
            dd(  $data);
            foreach ($data as $item) {
                echo $item['name'] . ' - ' . $item['email'] . "\n";
            }

        }
        catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['invalid' => 'Произошла ошибка при загрузке файла.']);
        }

    }
    public function all_orders(Request $request)
    {

        $orders_count        = Order::count();
        $price_request_count = PriceRequest::count();
        $drawing_count       = Drawing::count();
        $subscribe_count     = Subscribe::count();
        $model_request_count = ModelRequest::count();
        $consulting_count    = Consulting::count();
        return view('admin.from_site.index', compact('orders_count', 'price_request_count', 'drawing_count', 'subscribe_count', 'model_request_count', 'consulting_count'));
    }

    public function dashboard()
    {
        // $sitemap_exists = Storage::exists(public_path('sitemap.xml'));
        // $yandex_exists  = Storage::exists(public_path('yml.xml'));
        // $sitemap_exists =     Storage::exists(public_path('sitemap.xml'));
        $yml_path       = public_path() . '/yml.xml';
        $sitemap_path   = public_path() . '/sitemap.xml';
        $sitemap_exists = file_exists($sitemap_path);

        $sitemap_urls  = 0;
        $sitemap_stats = $yandex_stats = [];
        $sitemap_info  = pathinfo($sitemap_path);
        $yandex_exists = file_exists($yml_path);
        $orders_count  = Order::count();
        if ($sitemap_exists) {
            // echo 'already exists sitemap.xml ' . PHP_EOL;
            $sitemap_stats  = stat($sitemap_path);
            $sitemap_button = 'Регенерация Sitemap';
            $response       = file_get_contents($sitemap_path);
            $sitemap_urls   = substr_count($response, '<loc>');

        } else {
            $sitemap_button = 'Генерация Sitemap';
        }


        if ($yandex_exists) {
            // echo 'already exists sitemap.xml ' . PHP_EOL;
            $yandex_stats  = stat($yml_path);
            $yandex_button = 'Регенерация YML Яндекс';
            $response      = file_get_contents($yml_path);
            $yandex_urls   = substr_count($response, '</offer>');

        } else {
            $sitemap_button = 'Генерация YML Яндекс';
        }


        // dd($sitemap_exists, $sitemap_info, $yandex_exists, $sitemap_urls);

        $data = array(
            'orders_count' => $orders_count,
            'sitemap_exists' => @$sitemap_exists,
            'sitemap_stats' => @$sitemap_stats,
            'sitemap_button' => @$sitemap_button,
            'sitemap_urls' => @$sitemap_urls,


            'yandex_exists' => @$yandex_exists,
            'yandex_stats' => @$yandex_stats,
            'yandex_button' => @$yandex_button,
            'yandex_urls' => @$yandex_urls,

        );

        // dd($data);
        return view('dashboard', $data);


    }
}
