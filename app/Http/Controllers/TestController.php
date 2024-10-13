<?php

namespace App\Http\Controllers;
use App\Models\ExchangeRate;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\ProductPropertyValue;
use App\Models\ProductTypeProperty;


use App\Models\PropertyValue;
use App\Models\Property;
use App\Models\ProductTypePropertyValue;
use App\Models\Vendor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //

    public function product_values()
    {




        $product    = Product::find(1433);
        $properties = $product->product_property_values;
        $properties->load('propertyValue');
         dd($product, $properties);



        $characteristics = [];
        // Проходимся по свойствам вида товара
        foreach ( $properties as $property) {
           // $characteristics[$property->name] = ": " . $property->values->where('product_id', $product->id)->first()->value;
             dd($property);
            // // Если секция не равна 0, добавляем название секции
            // if ($property->section != 0) {
            //     $characteristics["<b>" . $property->name . "</b>"] = "";
            //     // Иначе, если значение свойства существует, добавляем название свойства и его значение
            // } else if ($property->values->where('product_id', $product->id)->first()?->value) {
            //     $characteristics[$property->name] = ": " . $property->values->where('product_id', $product->id)->first()->value;
            // }
        }
        return $characteristics;







        $propertyId        = 302;
        $properties        = ProductTypePropertyValue::where('product_type_property_id', $propertyId)->get(['id', 'value'])->toArray(); //->take(60);
        $productProperties = ProductPropertyValue::where('product_id', 64148)->with('value')->get()->toArray();
        // $key               = array_search(1, array_column($productProperties, 'product_type_property_value_id'));
        foreach ($properties as $test => $item) {
            $key = array_search($item['id'], array_column($productProperties, 'product_type_property_value_id'));
            if ($key !== false) {
                $properties[$test]['selected'] = true;
            }
        }
        dd($productProperties, $properties);


        $product = Product::find(64148);


        $product->load('type', 'composite');
        $productType = ProductType::where('id', $product->product_type_id)->with('props')->first();

        $properties = ProductPropertyValue::where('product_id', $product->id)->with('value')->get();

        //    $this->props       = $this->productType->props;
        // $product->load('type', 'composite', 'composite.compositeProduct');
        dd($productType, $properties, $product);
    }
    public function product_composite()
    {

        $product = Product::find(7718);
        // $product->load('type' , 'composite');

        $product->load('type', 'composite', 'composite.compositeProduct');
        dd($product->composite);
    }
    public function product_kinds_props()
    {
        $product = Product::find(1433);
        $product->load('type', 'properties');
        dd($product);


        // $product_types = ProductType::all( );
        // foreach ($product_types as $product_type) {
        # code...
        $product_type = ProductType::find(3);
        $product_type->load('old_props');

        $records = DB::table('product_kinds_props')->where('product_kind_id', $product_type->id)->orderBy('sorting', 'asc')->get();

        dd($product_type, $records);
        //     foreach ($variable as $key => $value) {
        //         # code...
        //     }
        // }

    }

    public function test_vendor_product()
    {
        $vendor = Vendor::findOrFail(1);
        dd(
            $vendor,
            $vendor->can_be_deleted,
        );

    }
    public function props_value_seed()
    {

        $items = Property::select('value')->distinct()->orderBy('value')->get();

        foreach ($items as $item) {
            // dd($item);
            # code...
            PropertyValue::create([
                'value' => $item->value,

            ]);

        }
    }
    public function test_currency_seed()
    {
        $items = ExchangeRate::latest()->get();

        $url = 'https://www.cbr.ru/scripts/XML_daily.asp'; // URL of the XML file
        $xml = simplexml_load_file($url);



        foreach ($items as $item) {
            dd($item);

            if ($item->eur_rate > 0) {

                CurrencyRate::create([
                    'currency_id' => 1,
                    'rate' => 1,
                ]);

            }
        }

    }
}
