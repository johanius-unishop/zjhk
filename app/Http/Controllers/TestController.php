<?php

namespace App\Http\Controllers;
use App\Models\ExchangeRate;
use App\Models\Vendor;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //


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
