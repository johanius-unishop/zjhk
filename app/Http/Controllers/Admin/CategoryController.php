<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;

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
        $parentCategories = Category::getCategoriesAsTree();
        return view('admin.category.create', ['parentCategories' => $parentCategories]);
        //

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
        Cache::forget('CategoriesAsTree');
        session()->flash('success', 'Запись успешно создана');

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
        // Fix to seeded records
        if ($category->seo->title== '') {
            $category->addSEO();
        }
        $parentCategories = Category::getCategoriesAsTree();

        return view('admin.category.edit', ['category' => $category, 'parentCategories' => $parentCategories]);

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

        // $category->seo->update([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'keywords' => $request->keywords,
        //     'canonical_url' => $request->canonical_url,
        // ]);


        // dd($category->seo->count());

        $category->seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'canonical_url' => $request->canonical_url,
        ]);
        // Cache::forget('front_vendors_list');

        Cache::forget('CategoriesAsTree');
        session()->flash('success', 'Запись успешно обновлена');

        if ($request->action == 'save-exit') {
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
