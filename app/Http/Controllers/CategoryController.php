<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index( Request $request)
    {
        return view('product-card', compact('viewModel'));
    }

    public function show(Category $category)
    {



    }


    public function testShow(Product $product)
    {
        $analogs =(Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);

        return view('front.product.test_show', compact('analogs'));
    }
}
