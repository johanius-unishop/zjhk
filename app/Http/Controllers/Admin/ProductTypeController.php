<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Admin\StoreProductTypeRequest;
use App\Http\Requests\Admin\UpdateProductTypeRequest;
class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.product-type.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        return view('admin.product-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductTypeRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        // dd(    $input);
        $request->filled('composite') ? $input['composite'] = 1 : $input['composite'] = 0;
        $record = ProductType::create($input);

        session()->flash('success', 'Запись успешно создана');
        return redirect(route('admin.product_type.index', $record->id));


    }

    /**
     * Display the specified resource.
     */
    public function show(ProductType $productType)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
         return view('admin.product-type.show', ['parent_type' => $productType]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductType $productType)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        return view('admin.product-type.edit', ['product_type' => $productType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypeRequest $request, ProductType $productType)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('composite') ? $input['composite'] = 1 : $input['composite'] = 0;
        $productType->update($input);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.product_type.index'));
        }
        return redirect(route('admin.product_type.edit', $productType->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
