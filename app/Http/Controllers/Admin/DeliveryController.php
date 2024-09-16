<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Admin\StoreDeliveryRequest;
use App\Http\Requests\Admin\UpdateDeliveryRequest;
class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //delivery
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.delivery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeliveryRequest $request, DeliveryMethod $deliveryMethod)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $record = DeliveryMethod::create($input);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.delivery.index'));
        }
        return redirect(route('admin.delivery.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryMethod $delivery)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.delivery.edit', ['delivery' => $delivery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeliveryRequest $request, DeliveryMethod $delivery)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $delivery->update($input);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.delivery.index'));
        }
        return redirect(route('admin.delivery.edit', $delivery->id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
