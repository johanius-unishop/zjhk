<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.new.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.new.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }


        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $request->filled('homepage_visible') ? $input['homepage_visible'] = 1 : $input['homepage_visible'] = 0;
        $record = News::create($input);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.new.index'));
        }
        return redirect(route('admin.new.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(News $new)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $new)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.new.edit', ['new' => $new]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $new)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $request->filled('homepage_visible') ? $input['homepage_visible'] = 1 : $input['homepage_visible'] = 0;
        $new->update($input);

        session()->flash('success', 'Новость успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.new.index'));
        }
        return redirect(route('admin.new.edit', $new->id));
    }


}
