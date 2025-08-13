<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Admin\StoreCurrencyRequest;
use App\Http\Requests\Admin\UpdateCurrencyRequest;


class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.currency.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.currency.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }



        $input = $request->all();
        $request->filled('auto_calc_cbrf') ? $input['auto_calc_cbrf'] = true : $input['auto_calc_cbrf'] = false;
        $record = Currency::create($input);

        session()->flash('success', 'Валюта успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.currency.index'));
        }

    }

}
