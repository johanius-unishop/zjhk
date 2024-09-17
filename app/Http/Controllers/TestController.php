<?php

namespace App\Http\Controllers;
use App\Models\ExchangeRate;
use App\Models\ProductType;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function product_kinds_props()
    {
        // $product_types = ProductType::all( );
        // foreach ($product_types as $product_type) {
        # code...
        $product_type = ProductType::find(3);
        $product_type->load('props');

        $records = DB::table('product_kinds_props')->where('product_kind_id', $product_type->id)  ->orderBy('sorting', 'asc')->get();

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
