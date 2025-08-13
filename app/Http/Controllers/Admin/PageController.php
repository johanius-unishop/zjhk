<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StorePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;

use Illuminate\Support\Facades\Gate;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.page.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }


        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $record = Page::create($input);

        session()->flash('success', 'Запись успешно создана');
        if ($request->action == 'save-exit') {
            return redirect(route('admin.page.index'));
        }
        return redirect(route('admin.page.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        return view('admin.page.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        if (!Gate::allows('admin-content')) {
            return abort(401);
        }
        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $page->update($input);

        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.page.index'));
        }
        return redirect(route('admin.page.edit', $page->id));
    }


}
