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

        // return view('admin.content.index', compact('news_count', 'blog_count', 'page_count', 'portfolio_count', 'opinion_count'));
        return view('admin.content.index');


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

}
