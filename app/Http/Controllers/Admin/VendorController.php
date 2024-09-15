<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Admin\StoreVendorRequest;
use App\Http\Requests\Admin\UpdateVendorRequest;


class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.vendor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.vendor.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }


        $input = $request->all();
        // dd($input);
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;

        $record = Vendor::create($input);



        $record->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        Cache::forget('front_vendors_list');
        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.vendor.index'));
        }
        return redirect(route('admin.vendor.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.vendor.show', ['vendor' => $vendor]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        // Fix to seeded records
        if ($vendor->seo->count() == 0) {
            $vendor->addSEO();
        }
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.vendor.edit', ['vendor' => $vendor]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        // dd( $input );
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $vendor->update($input);

        $vendor->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        Cache::forget('front_vendors_list');
        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.vendor.index'));
        }
        return redirect(route('admin.vendor.edit', $vendor->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
