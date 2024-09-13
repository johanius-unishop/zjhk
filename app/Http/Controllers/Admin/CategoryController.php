<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
        // , ['parent_category' => $category]

    }

    public function createNew(Category $category)
    {
        //

        // if (!Gate::allows('manage content')) {
        //     return abort(401);
        // }

        return view('admin.category.create', ['category' => $category]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // dd($request->all());

        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->all();
        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;


        $record = Category::create($input);

        $record->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);

        // Cache::forget('front_vendors_list');
        session()->flash('success', 'Фабрика успешно создана');

        if ($request->action == 'save-exit') {
            return redirect(route('admin.category.index'));
        }
        return redirect(route('admin.category.edit', $record->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        return view('admin.category.show', ['parent_category' => $category]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {

        // dd($request->all());


        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        $input = $request->all();

        $request->filled('published') ? $input['published'] = 1 : $input['published'] = 0;
        $category->update($input);

        $category->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);
        // Cache::forget('front_vendors_list');
        session()->flash('success', 'Категория  успешно обновлена');


        if ($request->action == 'save') {
            return redirect(route('admin.category.index'));
        }
        return redirect(route('admin.category.edit', $category->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
