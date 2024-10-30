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
        $parentCategories = Category::getCategoriesAsTree();
        return view('admin.category.create', ['parentCategories' => $parentCategories]);
        // return view('admin.category.create', ['category' => $category]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        if (!Gate::allows('manage content')) {
            return abort(401);
        }

        $input = $request->only(['name', 'parent_id', 'description']); // Убедитесь, что тут указаны все нужные поля
        $input['published'] = $input['published'] ?? 0; // Устанавливаем published, если оно не пришло

        $record = Category::create($input); // Создаем новую категорию

        // Обновляем SEO-данные
        if ($record->seo) {
            $record->seo->update([
                'title' => $request->title,
                'description' => $request->description,
                'keywords' => $request->keywords,
                'canonical_url' => $request->canonical_url,
            ]);
        } else {
            // Если SEO еще не создано, создаем его
            $record->seo()->create([
                'title' => $request->title,
                'description' => $request->description,
                'keywords' => $request->keywords,
                'canonical_url' => $request->canonical_url,
            ]);
        }

        Cache::forget('CategoriesAsTree'); // Очищаем кеш
        session()->flash('success', 'Запись успешно создана');

        // Определяем дальнейшие действия
        if ($request->action == 'save-exit') {
            return redirect(route('admin.category.index'));
        }

        return redirect(route('admin.category.edit', $record->id)); // Возвращаемся на страницу редактирования
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
            // Получаем родительскую категорию
            $parentCategory = Category::find($category->parent_id);
        
            // Проверка наличия SEO-данных вынесена в отдельный метод
            $this->ensureSeoDataExists($category);
        
            // Получаем все категории в виде дерева
            $categories = Category::getCategoriesAsTree();
        
            // Исключаем текущую категорию и её потомков из списка доступных родительских категорий
            $categories = $categories->filter(function ($cat) use ($category) {
                return $cat->id != $category->id && !$cat->isDescendantOrSelf($category);
            });
        
            return view('admin.category.edit', [
                'category' => $category,
                'parentCategory' => $parentCategory,
                'categories' => $categories
            ]);
        }

    // Метод для проверки и добавления SEO-данных
    protected function ensureSeoDataExists(Category $category)
    {
        if ($category->seo->title == '') {
            $category->addSEO();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
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
