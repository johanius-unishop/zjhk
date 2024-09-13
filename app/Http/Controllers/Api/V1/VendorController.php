<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function list_by_id(Request $request)
    {
        $vendor = Vendor::where('id', $request->vendor_id)->get(['id', 'name']);
        foreach ($vendor as $vendor) {

            $vendor->selected = true;


        }

        return response()->json($vendor, 200);
    } /**
      * Display a listing of the resource.
      */
    public function list(Request $request)
    {

        //   dd($request->all());

        if (!$request->filled('q')) {
            $vendors = Vendor::all(['id', 'name']); //->take(60);

        } else {
            $search  = $request->q;
            $vendors = Vendor::query()
                ->search($request->q)
                ->get(array('id', 'name'))
                ->take(60);

        }

        return response()->json($vendors, 200);


    }


}
