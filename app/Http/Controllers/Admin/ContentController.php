<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\News;
use App\Models\Page;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductTypeProperty;
use App\Models\Order;
use App\Models\Faq;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
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
        $news_count = News::count();
        $faq_count  = Faq::count();
        $page_count = Page::count();
        $article_count = Article::count();
        return view('admin.content.index', compact('news_count', 'page_count' , 'faq_count'  , 'article_count'  ));
    }

    public function all_orders()
    {
        $open_orders_count = Order::where('received', '!=', 1)->count();
        return view('admin.content.all_orders', compact('open_orders_count'));

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
        $open_orders_count = Order::where('received', '!=', 1)->count();//
        return view('admin.model.menu', compact('open_orders_count'));
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
        // Товары без присвоения типа товара
        $no_product_type_count = Product::whereNull('product_type_id')->count();
        $no_vendor_count = Product::whereNull('vendor_id')->orWhere('vendor_id', '=', 0)->count();
        
        $product_with_photo_problem_count = Product::withCount([
            'media as image_count' => function ($query) {
                $query->where('collection_name', 'images'); // Укажите название вашей коллекции медиа
            },
        ])->havingRaw('image_count < 5')->get()->count();
        
        $product_without_3d_count = Product::where('composite_product', '!=', '1')->withCount([
            'media as 3dModel_count' => function ($query) {
                $query->where('collection_name', '3dModel'); // Укажите название вашей коллекции медиа
            },
        ])->havingRaw('3dModel_count < 1')->get()->count();

        $no_category_count = Product::whereNull('category_id')->count();
        $no_currency_count = Product::whereNull('currency_id')->count();
        $no_supplier_price_count = Product::where(function ($query) {
            $query->where('composite_product', '=', 0);
            
            $query->where(function ($subQuery) {
                $subQuery->whereNull('supplier_price')
                ->orWhere('supplier_price', '=', 0);
            });
        })->count();
        $no_tn_ved_count = Product::where(function ($query) {
            $query->whereNull('tn_ved')
            ->orWhere('tn_ved', '=', '');
            
            $query->where('composite_product', '=', 0);
        })->count();
        $product_types_without_properties = ProductType::doesntHave('properties')->count();
        $product_type_properties_without_values = ProductTypeProperty::doesntHave('productTypePropertyValues')->count();

        $data = array(
            'orders_count' => $orders_count,
            'sitemap_exists' => @$sitemap_exists,
            'sitemap_stats' => @$sitemap_stats,
            'sitemap_button' => @$sitemap_button,
            'sitemap_urls' => @$sitemap_urls,
            'no_product_type_count' => $no_product_type_count,
            'no_vendor_count' => $no_vendor_count,
            'no_category_count' => $no_category_count,
            'no_currency_count' => $no_currency_count,
            'no_supplier_price_count' => $no_supplier_price_count,
            'product_with_photo_problem_count' => $product_with_photo_problem_count,
            'product_without_3d_count' => $product_without_3d_count,
            'no_tn_ved_count' => $no_tn_ved_count,
            'product_types_without_properties' => $product_types_without_properties,
            'product_type_properties_without_values' => $product_type_properties_without_values,
            

        );

        return view('admin.dashboard', $data);


    }

}
