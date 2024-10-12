<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PropertyValue;
use App\Models\ProductType;
use App\Models\Product;
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
        // dd($request->all() );

        $result = ProductTypePropertyValue::where('product_type_property_id', $request->product_type_property_id)->where('value', $request->product_type_property_value)->first();
        if (!$result) {
            $value_id = ProductTypePropertyValue::create([
                'product_type_property_id' => $request->product_type_property_id,
                'value' => $request->product_type_property_value,

            ])->id;
        } else {
            $value_id = $result->id;
        }

        $res = ProductPropertyValue::where('product_type_property_id', $request->product_type_property_id)->where('product_id', $request->product_id)->first();

        if (!$res) {
            ProductPropertyValue::create([
                'product_id' => $request->product_id,
                'product_type_property_id' => $request->product_type_property_id,
                'product_type_property_value_id' => $request->value_id,
            ]);
        } else {
            $res->product_type_property_value_id = $value_id;
            $res->save();

        }
        //  Лимит на длину поля MYSQL!
        // $res = ProductPropertyValue::upsert(
        //     [
        //         [
        //             'product_id' => $request->product_id,
        //             'product_type_property_id' => $request->product_type_property_id,
        //             'product_type_property_value_id' => $value_id,
        //         ],
        //     ],
        //     ['product_id', 'product_type_property_id'],
        //     ['product_type_property_value_id'],
        // );
        // dd($res);
        response()->json(['success' => 'success'], 200);

    }
    public function property_list(Request $request)
    {
        if (!$request->filled('q')) {
            $properties = ProductTypePropertyValue::where('product_type_property_id', $request->propertyId)->get(['id', 'value']); //->take(60);
        } else {
            $search     = $request->q;
            $properties = ProductTypePropertyValue::query()->where('product_type_property_id', $request->propertyId)
                ->search($request->q)
                ->get(array('id', 'value'))
                ->take(20);
        }
        $productProperties = ProductPropertyValue::where('product_id', $request->productId)->with('value')->get()->toArray();


        foreach ($properties as $test => $item) {
            $key = array_search($item['id'], array_column($productProperties, 'product_type_property_value_id'));
            if ($key !== false) {
                $properties[$test]['selected'] = true;
            }
        }
        // $product = Product::find($request->productId);

        // dd($request->all(), $vendors);
        // // ProductPropertyValue
        // // TODO проверка! Доделать select для сущейсвующей записи для  product_property_values
        // foreach ($vendors as $item) {
        //     //     if ($item->id == $request->propertyId) {
        //     $item->selected = true;
        // }
        return response()->json($properties, 200);
    }


    public function property_list_by_id(Request $request)
    {

        $item = ProductPropertyValue::where('product_id', $request->product_id)->where('product_type_property_id', $request->property_id)->get(['id', 'product_type_property_value_id']); //->take(60);
        foreach ($item as $item) {
            $item->selected = true;
            $item->value    = ProductTypePropertyValue::query()->where('id', $item->product_type_property_value_id)->first()->value;
        }
        return response()->json($item, 200);
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
