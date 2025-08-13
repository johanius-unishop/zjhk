<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdditionalSettingRequest;
use App\Models\AdditionalSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdditionalSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.additional-setting.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.additional-setting.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdditionalSettingRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }

        $input = $request->all();
        $record = AdditionalSetting::create($input);

        session()->flash('success', 'Новая настройка успешно добавленана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.additional-setting.index'));
        }

    }

}

