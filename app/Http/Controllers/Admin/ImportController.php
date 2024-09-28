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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use DOMDocument;
use Illuminate\Support\Facades\Storage;
use App\Services\CsvService;
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

   public function import_product_images( )
    {
        $images = DB::table('product_pdfs') ->all();
    }

    public function import_product_files( )
    {

        $types=[
            1=> 'specifications',
            2=>'dimensionalDrawing',
            3=>'overviewInformation'
        ];
      $files = DB::table('product_pdfs') ->get();

      foreach ($files as $file) {
        dd($file , $types[$file->product_pdf_type_id] );
      }



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
