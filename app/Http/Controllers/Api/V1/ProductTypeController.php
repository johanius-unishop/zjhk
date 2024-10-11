<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PropertyValue;
use App\Models\ProductType;
use App\Models\ProductTypePropertyValue;
use App\Models\ProductPropertyValue;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{

    public function property(Request $request)
    {
        $vendors = PropertyValue::get(['id', 'value']);
        foreach ($vendors as $vendor) {
            $vendor->selected = true;
        }

        return response()->json($vendors, 200);
    }

    public function product_property_update(Request $request)
    {
        // dd($request->all());
        // 'product_id',
        // 'product_type_property_id',
        // 'product_type_property_value',
        // TODO проверка на новое значение характеристики
        $value_id = $request->product_type_property_value;
        $result   = ProductTypePropertyValue::where('product_type_property_id', $request->product_type_property_id)->where('value', $request->product_type_property_value)->first();
        // dd($result);
        if (!$result) {
            $value_id = ProductTypePropertyValue::create([
                'product_type_property_id' => $request->product_type_property_id,
                'value' => $request->product_type_property_value,

            ])->id;
        }

        ProductPropertyValue::upsert(
            [
                'product_id' => $request->product_id,
                'product_type_property_id' => $request->product_type_property_id,
                'product_type_property_values_id' => $value_id,
            ],
            ['product_id', 'product_type_property_id'],
            update: ['product_type_property_values_id'],
        );


    }
    public function property_list(Request $request)
    {
        // dd($request->all());
        if (!$request->filled('q')) {
            $vendors = ProductTypePropertyValue::where('product_type_property_id', $request->propertyId)->get(['id', 'value']); //->take(60);
         } else {
            $search  = $request->q;
            $vendors = ProductTypePropertyValue::query()->where('product_type_property_id', $request->propertyId)
                ->search($request->q)
                ->get(array('id', 'value'))
                ->take(20);
        }
        return response()->json($vendors, 200);
    }


    public function test_json_group(Request $request)
    {
        $vendors = ProductType::with('productSubtypes')->get(['id', 'name']);
        foreach ($vendors as $vendor) {
            $vendor->selected = true;
        }

        return response()->json($vendor, 200);
    }
    public function list_by_id(Request $request)
    {
        $vendors = ProductType::where('id', $request->product_type_id)->get(['id', 'name']);
        foreach ($vendors as $vendor) {
            $vendor->selected = true;
        }

        return response()->json($vendor, 200);
    }
    // public function product_subtype_by_id(Request $request)
    // {
    //     //    dd  ($request->all());
    //     $item = ProductSubtype::where('id', $request->product_subtype_id)->where('product_type_id', $request->product_type_id)->get(['id', 'name']);

    //     //  dd($items);
    //     foreach ($item as $item) {
    //         //     if ($item->id == $request->product_subtype_id) {
    //         $item->selected = true;
    //     }

    //     // }

    //     return response()->json($item, 200);
    // }



    public function list(Request $request)
    {
        //   dd($request->all());
        if (!$request->filled('q')) {
            $vendors = ProductType::all(['id', 'name']); //->take(60);

        } else {
            $search  = $request->q;
            $vendors = ProductType::query()
                ->search($request->q)
                ->get(array('id', 'name'))
                ->take(60);
        }
        return response()->json($vendors, 200);
    }
    // public function product_subtype(Request $request)
    // {
    //     //   dd($request->all());
    //     if (!$request->filled('q')) {
    //         $vendors = ProductSubtype::all(['id', 'name']); //->take(60);
    //     } else {
    //         $search  = $request->q;
    //         $vendors = ProductSubtype::query()
    //             ->search($request->q)
    //             ->get(array('id', 'name'))
    //             ->take(60);
    //     }

    //     return response()->json($vendors, 200);

    // }
}
