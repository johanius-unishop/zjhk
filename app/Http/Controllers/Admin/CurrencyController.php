<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.currency.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.currency.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request)
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }


        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $record = Currency::create($input);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.currency.index'));
        }
        return redirect(route('admin.currency.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.currency.show', ['currency' => $currency]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.currency.edit', ['currency' => $currency]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $currency->update($input);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.currency.index'));
        }
        return redirect(route('admin.currency.edit', $currency->id));
    }


}
