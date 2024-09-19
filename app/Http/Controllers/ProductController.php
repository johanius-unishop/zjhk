<?php
namespace App\Http\Controllers;
use App\Models\Product;
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
        $analogs =(Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);

        return view('front.product.test_show', compact('analogs'));
    }
}
