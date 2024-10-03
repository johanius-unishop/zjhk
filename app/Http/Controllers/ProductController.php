<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\ViewModels\ProductViewModel;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $viewModel = new ProductViewModel($product);
        return view('product-card', compact('viewModel'));
    }


    public function testShow(Product $product)
    {
        $analogs = (Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);
        $categories = $product->category->ancestors;
        // dd($categories);
        $images      = $product->getMedia('images');
        $breadcrumbs = Category::ancestorsAndSelf($product->category_id)->toArray();
        //  dd($breadcrumbs);
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

        //    dd($data);
        return view('front.product.test_show', ['data' => $data]);
    }
}
