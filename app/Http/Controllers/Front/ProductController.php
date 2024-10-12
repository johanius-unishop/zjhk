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
    public function show(Product $product)
    {

        $viewModel = new ProductViewModel($product);
        return view('product-card', compact('viewModel'));
    }

    // public function testShow(Product $product)
    public function testShow( $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        if ($product->published !== 1) {
            return abort(404);
        }

        $analogs = (Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);
        $images      = $product->getMedia('images');
        $breadcrumbs = Category::ancestorsAndSelf($product->category_id)->toArray();


        $data = [

            'breadcrumbs' => $breadcrumbs,
            'product' => $product,
            'analogs' => $analogs,
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
        return view('front.product.test_show', ['data' => $data]);
    }
}
