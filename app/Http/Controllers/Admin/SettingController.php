<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class SettingController extends Controller
{
    //settings

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        return view('admin.setting.index');
    }

}
