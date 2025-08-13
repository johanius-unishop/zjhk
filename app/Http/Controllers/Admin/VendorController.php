<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\Country;
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

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.vendor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $countries = Country::select(['name', 'id'])
        ->orderBy('name')
        ->get();
        return view('admin.vendor.create', compact('countries'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {
        // Проверка прав доступа
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        // Подготовка входных данных
        $input = $request->all();
        $input['published'] = $request->filled('published'); // Преобразуем в boolean

        // Создание записи
        $record = Vendor::create($input);

        // Обработка загрузки логотипа
        if ($request->hasFile('vendorLogo')) {
            $record
                ->addMediaFromRequest('vendorLogo')
                ->toMediaCollection('vendorLogo');
        }

        // Обновляем SEO-данные
        $record->seo()->update([
            'title'       => $request->title,
            'description' => $request->description,
            'keywords'    => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        // Очистка кеша
        Cache::forget('front_vendors_list');

        // Уведомление об успехе
        session()->flash('success', 'Запись успешно создана');

        return redirect()->route('admin.vendor.index', $record->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.vendor.show', ['vendor' => $vendor]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        if ($vendor->seo->title== '') {
            $vendor->addSEO();
        }
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $countries = Country::select(['name', 'id'])
                    ->orderBy('name')
                    ->get();
        return view('admin.vendor.edit', compact('countries', 'vendor'));

    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();
        // dd( $input );
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $vendor->update($input);

        // Обработка загрузки логотипа

        if ($request->hasFile('vendorLogo')) {
            // Удаление старого логотипа, если он есть
            $oldMedia = $vendor->getMedia('vendorLogo');
            if ($oldMedia) {
                $oldMedia->each->delete();
            }

            // Добавление нового логотипа
            $vendor
                ->addMediaFromRequest('vendorLogo')
                ->toMediaCollection('vendorLogo');
        }

        $vendor->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        Cache::forget('front_vendors_list');
        session()->flash('success', 'Запись успешно обновлена');

        return redirect(route('admin.vendor.index', $vendor->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
