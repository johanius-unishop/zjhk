<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductPdfType;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;


class ProductPdfTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.product-pdf-type.index');
    }
}
