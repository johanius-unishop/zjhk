<?php

namespace App\Http\Controllers;

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
        $vendor = Vendor::findOrFail(1);
        dd(
            $vendor,
            $vendor->can_be_deleted,
        );

    }
}
