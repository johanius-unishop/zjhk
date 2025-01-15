<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use App\Models\ProductTypePropertyValue;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
class ProductTypePropertyValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     */
    
    public function show(ProductTypePropertyValue $productTypePropertyValue)
    {
        $productTypeProperty = $productTypePropertyValue->productTypeProperty;

            return view('admin.product-type-property.show', ['productTypePropertyValue' => $productTypePropertyValue, 'productTypeProperty' => $productTypeProperty]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(  )
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
