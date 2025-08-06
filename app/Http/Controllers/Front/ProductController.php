<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;

class ProductController extends Controller
{
    //public function show(Product $product)
    //{

      //  $viewModel = new ProductViewModel($product);
        //return view('product-card', compact('viewModel'));
    //}

    // public function testShow(Product $product)
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        if ($product->published !== 1) {
            return abort(404);
        }
        dd($product);
       // $analogs = (Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);
        $images      = $product->getMedia('images');
        $parents = Category::ancestorsAndSelf($product->category_id)->toArray();


        $data = [

            'parents' => $parents,
            'product' => $product,
           // 'analogs' => $analogs,
            'images' => $images,
            // 'media' => $media,
            // 'files' => $files,
            // 'price_categories' => $price_categories,
            // 'stores' => $stores,
            // 'enableQuestion' => $enableQuestion,
            // 'enableFastBay' => $enableFastBay,
            // 'enableSale' => $enableSale,
        ];



        SEOMeta::setTitle($product->seo->title);
        SEOMeta::setDescription($product->seo->description);
        SEOMeta::setKeywords($product->seo->keywords);
        //    dd($data);
        return view('front.product.show', ['data' => $data]);
    }
}
