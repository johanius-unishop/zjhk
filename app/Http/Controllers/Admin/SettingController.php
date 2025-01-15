<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.setting.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        return view('admin.setting.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSettingRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        
        $input = $request->all();
        $record = Setting::create($input);

        session()->flash('success', 'Новая настройка успешно добавленана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.setting.index'));
        }
        
    }

}

