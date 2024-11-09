<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
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



    public function createNew(ProductType $product_type)
    {
        //

        // if (!Gate::allows('manage content')) {
        //     return abort(401);
        // }

        return view('admin.product-type-property.create', ['productType' => $product_type]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypePropertyRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();
        $request->filled('section') ? $input['section'] = 1 : $input['section'] = 0;
        $record = ProductTypeProperty::create($input);

        session()->flash('success', '{Характеристика успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.product_type.show', $record->product_type_id));
        }
        return redirect(route('admin.product_type.show', $record->product_type_id));
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductTypeProperty $productTypeProperty)
    {
        $productType = $productTypeProperty->productType;

        // dd(  $product_type , $productTypeProperty) ;

        // return view('admin.product-type-property.show', ['parentCategory' => $productTypeProperty]);
        return view('admin.product-type-property.show', ['productTypeProperty' => $productTypeProperty, 'productType' => $productType]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductTypeProperty $productTypeProperty)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $product_type = $productTypeProperty->productType;

        return view('admin.product-type-property.edit', ['productTypeProperty' => $productTypeProperty, 'productType' => $product_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypePropertyRequest $request, ProductTypeProperty $productTypeProperty)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        // $request->filled(key: 'composite') ? $input['composite'] = 1 : $input['composite'] = 0;
        $productTypeProperty->update($input);
        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.product_type.show', $productTypeProperty->product_type_id));
        }
        return redirect(route('admin.product_type_show.', $productTypeProperty->product_type_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($productTypeProperty)
    {
        //
    }
}
