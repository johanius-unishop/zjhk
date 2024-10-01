<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// use App\Models\Blog;
use App\Models\News;
use App\Models\Page;
// use App\Models\Product;
// use App\Models\Consulting;
// use App\Models\Vendor;
// use App\Models\PriceRequest;
// use App\Models\ProductType;
// use App\Models\Opinion;
use App\Models\Order;
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
        $news_count = News::count();
        // $blog_count = Blog::count();
        $page_count = Page::count();

        return view('admin.content.index', compact('news_count', 'page_count'));
        //  return view('admin.content.index');
    }


    public function regenerateSitemap()
    {
        Log::info('Генерация sitemap');
        Artisan::call('app:generate-sitemap');
        session()->flash('success', 'Генерация sitemap запущена');
        return redirect()->back()->with('success', 'Генерация sitemap запущена');
    }



    public function model()
    {
        //
        // $news_count = News::count();
        // $blog_count = Blog::count();
        // $page_count = Page::count();

        // return view('admin.content.index', compact('news_count', 'blog_count', 'page_count', 'portfolio_count', 'opinion_count'));
        return view('admin.model.menu');


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
            $sitemap_stats  = stat($sitemap_path);
            $sitemap_button = 'Регенерация Sitemap';
            $response       = file_get_contents($sitemap_path);
            $sitemap_urls   = substr_count($response, '<loc>');

        } else {
            $sitemap_button = 'Генерация Sitemap';
        }


        // if ($yandex_exists) {
        //     // echo 'already exists sitemap.xml ' . PHP_EOL;
        //     $yandex_stats  = stat($yml_path);
        //     $yandex_button = 'Регенерация YML Яндекс';
        //     $response      = file_get_contents($yml_path);
        //     $yandex_urls   = substr_count($response, '</offer>');

        // } else {
        //     $sitemap_button = 'Генерация YML Яндекс';
        // }


        // dd($sitemap_exists, $sitemap_info, $yandex_exists, $sitemap_urls);

        $data = array(
            'orders_count' => $orders_count,
            'sitemap_exists' => @$sitemap_exists,
            'sitemap_stats' => @$sitemap_stats,
            'sitemap_button' => @$sitemap_button,
            'sitemap_urls' => @$sitemap_urls,


            // 'yandex_exists' => @$yandex_exists,
            // 'yandex_stats' => @$yandex_stats,
            // 'yandex_button' => @$yandex_button,
            // 'yandex_urls' => @$yandex_urls,

        );

        // dd($data);
        return view('admin.dashboard', $data);


    }

}
