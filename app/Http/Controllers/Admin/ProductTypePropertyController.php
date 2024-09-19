<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductTypeProperty;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreProductTypePropertyRequest;
use App\Http\Requests\Admin\UpdateProductTypePropertyRequest;
use Illuminate\Support\Facades\Gate;
class ProductTypePropertyController extends Controller
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
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        return view('admin.product-type-property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypePropertyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductTypeProperty $productTypeProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductTypeProperty $productTypeProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypePropertyRequest $request, ProductTypeProperty $productTypeProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productTypeProperty)
    {
        //
    }
}
