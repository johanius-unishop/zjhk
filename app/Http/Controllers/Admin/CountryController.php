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


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.country.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        // Проверка прав доступа
        if (!Gate::allows('manage-content')) {
            return abort(401);
        }
    
        // Подготовка входных данных
        $input = $request->validated();
    
        // Создание записи
        $record = Country::create($input);
    
        // Обработка загрузки логотипа
    //if ($request->hasFile('countryFlag')) {
      //      $record
        //        ->addMediaFromRequest('countryFlag')
          //      ->toMediaCollection('countryFlag');
        //}
        
        // Уведомление об успехе
        session()->flash('success', 'Страна успешно создана');
    
        return redirect()->route('admin.country.index', $record->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.country.show', ['country' => $country]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.country.edit', compact('country'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();
        // dd( $input );
        $country->update($input);

        // Обработка загрузки флага страны
        
        if ($request->hasFile('countryFlag')) {
            // Удаление старого флага страны, если он есть
            $oldMedia = $country->getMedia('countryFlag');
            if ($oldMedia) {
                $oldMedia->each->delete();
            }
        
            // Добавление нового флага страны
            $country
                ->addMediaFromRequest('countryFlag')
                ->toMediaCollection('countryFlag');
        }
        session()->flash('success', 'Запись страны успешно обновлена');

        return redirect(route('admin.country.index', $country->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
