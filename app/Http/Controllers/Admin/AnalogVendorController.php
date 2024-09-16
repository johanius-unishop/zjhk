<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnalogVendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Admin\StoreAnalogVendorRequest;
use App\Http\Requests\Admin\UpdateAnalogVendorRequest;
class AnalogVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //analog-vendor
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.analog-vendor.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.analog-vendor.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnalogVendorRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $record = AnalogVendor::create($input);

         session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.analog-vendor.index'));
        }
        return redirect(route('admin.analog-vendor.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(AnalogVendor $analogVendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnalogVendor $analogVendor)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.analog-vendor.edit', ['analogVendor' => $analogVendor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnalogVendorRequest $request, AnalogVendor $analogVendor)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }


        $input = $request->all();
        // dd( $input );
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $analogVendor->update($input);


        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.analog-vendor.index'));
        }
        return redirect(route('admin.analog-vendor.edit', $analogVendor->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnalogVendor $analogVendor)
    {
        //
    }
}
