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

            $parentCategory = Category::findOrFail($category->parent_id);

            // Получаем все категории в виде дерева
            $categories = Category::getCategoriesAsTree();


            return view('admin.category.edit', [
                'category' => $category,
                'parentCategory' => $parentCategory,
                'categories' => $categories
            ]);
        }


    /*// Метод для проверки и добавления SEO-данных
    protected function ensureSeoDataExists(Category $category)
    {
        if ($category->seo->title == '') {
            $category->addSEO();
        }
    }*/

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if (!Gate::allows('admin-content')) {
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


        Cache::forget('CategoriesAsTree');
        session()->flash('success', 'Запись успешно обновлена');

        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
