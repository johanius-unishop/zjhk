<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ProductTypeCompositeElement;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreProductTypeCompositeRequest;
use App\Http\Requests\Admin\UpdateProductTypeCompositeRequest;
use Illuminate\Support\Facades\Gate;
class ProductTypeCompositeElementController extends Controller
{


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
    public function store(StoreProductTypeCompositeRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();

        $record = ProductTypeCompositeElement::create($input);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.product_type.show', $record->product_type_id));
        }
        return redirect(route('admin.product_type_property.edit', $record->id));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductTypeCompositeElement $productTypeCompositeElement)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        return view('admin.product-type-property.edit', ['productTypeCompositeElement' => $productTypeCompositeElement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductTypeCompositeRequest $request, ProductTypeCompositeElement $productTypeCompositeElement)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        // $request->filled(key: 'composite') ? $input['composite'] = 1 : $input['composite'] = 0;
        $productTypeCompositeElement->update($input);
        session()->flash('success', 'Запись успешно обновлена');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.product_type.show', $productTypeCompositeElement->product_type_id));
        }
        return redirect(route('admin.product_type_property.edit', $productTypeCompositeElement->id));
    }


}
