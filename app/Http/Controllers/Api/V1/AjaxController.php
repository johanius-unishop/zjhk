<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use App\Models\Vendor;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getNextPage(Request $request)
    {
        $items = [];

        return response()->json($items, 200);
    }

}
