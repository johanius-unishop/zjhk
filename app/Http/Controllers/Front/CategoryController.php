<?php
namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;


class CategoryController extends Controller
{

    public function index(Request $request)
    {
        // $category = Category::where('slug', $slug)->firstOrFail();
        return view('front.category.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $childrens = $category->childrens;
        $products  = $category->products;
        dd($category, $products, $childrens);


        SEOMeta::setTitle($category->seo->title);
        SEOMeta::setDescription($category->seo->description);
        SEOMeta::setKeywords($category->seo->keywords);

        return view('front.category.show', compact('category'));


    }


    public function testShow(Product $product)
    {
        $analogs = (Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);

        return view('front.product.test_show', compact('analogs'));
    }
}
