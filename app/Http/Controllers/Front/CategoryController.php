<?php
namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{

    public function index(Request $request)
    {




        return view('front.category.catalog', compact('categories'));
    }

    public function show(Category $category)
    {



    }


    public function testShow(Product $product)
    {
        $analogs = (Product::getAnalogies($product));
        // /$viewModel = new ProductViewModel($product);

        return view('front.product.test_show', compact('analogs'));
    }
}
