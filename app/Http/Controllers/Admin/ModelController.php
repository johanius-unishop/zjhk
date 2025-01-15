<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Currency, PriceSegment, ProductType ,  ProductClass,  ProductStyle, Vendor, Product,Order};

class ModelController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function menu()
    {
        //
        $currency_count = Currency::count();
        $price_segment_count    = PriceSegment::count();
        $product_location_count =  0; 

        $product_class_count = 0;//ProductClass::count();
        $vendor_count        = Vendor::count();

        $product_count = Product::count();
        $product_style_count = ProductStyle::count();

        $product_type_count = ProductType::count();
        
        return view('admin.model.menu', compact('price_segment_count', 'product_location_count', 'product_class_count', 'vendor_count', 'product_count' , 'product_style_count', 'product_type_count'));
     }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
