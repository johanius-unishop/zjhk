<?php
namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;


class CategoryController extends Controller
{

    public function catalog(Request $request)
    {
        // $categories = Category::published()->get();
        $childrens = Category::whereIsRoot( )
            ->with('childrens')
            ->get();
    //   dd($childrens );
        SEOMeta::setTitle( "Каталог товаров");
        SEOMeta::setDescription( "Каталог товаров");
        SEOMeta::setKeywords( "Каталог товаров");

        return view('front.category.index', ['childrens' => $childrens]);
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $childrens = Category::defaultOrder()->descendantsOf($category->id);
        $parents = $category->ancestors->toArray();

        $products = Product::where('category_id', $category->id)->with('media')->paginate(12)->withQueryString();
        // $products = $category->products->paginate(12);

        $products = checkInCartAndFavourites($products);


        //   dd($category, $products, $childrens);

        $images = $category->getMedia('images');

        SEOMeta::setTitle($category->seo->title);
        SEOMeta::setDescription($category->seo->description);
        SEOMeta::setKeywords($category->seo->keywords);

        $data = [
            'category' => $category,
            'parents' => $parents,
            'products' => $products,
            'childrens' => $childrens,
            'images' => $images,
            //
            // 'files' => $files,
            // 'price_categories' => $price_categories,
            // 'stores' => $stores,
            // 'enableQuestion' => $enableQuestion,
            // 'enableFastBay' => $enableFastBay,
            // 'enableSale' => $enableSale,
        ];

        SEOMeta::setTitle($category->seo->title);
        SEOMeta::setDescription($category->seo->description);
        SEOMeta::setKeywords($category->seo->keywords);

        return view('front.category.show', ['data' => $data]);
    }

}
