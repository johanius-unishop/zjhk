<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;


class CategoryController extends Controller
{



    public function catalog(Request $request)
    {
        // $categories = Category::published()->get();
        $childrens = Category::whereIsRoot()
            ->with('childrens')
            ->get();
        //   dd($childrens );
        SEOMeta::setTitle("Каталог товаров");
        SEOMeta::setDescription("Каталог товаров");
        SEOMeta::setKeywords("Каталог товаров");

        return view('front.category.index', ['childrens' => $childrens]);
    }

    public function show($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $childrens = Category::defaultOrder()
            ->where('parent_id', $category->id)
            ->get();
        $parents = $category->ancestors->toArray();

        $filter = 1; //Вывод боковой панели фильтра отключен, чтобы включить, нужно передать 1

        // Количество товаров на одну страницу (может передаваться параметром или фиксировано)
        $perPage = $request->input('per_page', 8); // значение по умолчанию - 8 товаров

        // Обрабатываем параметр reset_page
        if ($request->boolean('reset_page')) {
            $pageNumber = 1; // Сбрасываем на первую страницу
            // Удаляем параметр reset_page из запроса
            $request->merge(['reset_page' => null]);
        } else {
            $pageNumber = $request->input('page', 1);
        }

        // Основной запрос по товарам
        $query = Product::select('*')
            ->where('category_id', $category->id)
            ->where('published', 1)
            ->orderByRaw("CASE WHEN stock > 0 THEN 0 ELSE 1 END") // сначала положительные остатки
            ->orderBy('order_column');

        // Выполняем пагинацию и подтягиваем медиа-данные
        $products = $query->with('media')->paginate($perPage, ['*'], 'page', $pageNumber)->withQueryString()->toArray();



        $childrens = Category::defaultOrder()
            ->where('parent_id', $category->id)
            ->get();
        $parents = $category->ancestors->toArray();


        SEOMeta::setTitle($category->seo->title);
        SEOMeta::setDescription($category->seo->description);
        SEOMeta::setKeywords($category->seo->keywords);

        $data['category'] = $category;
        $data['parents'] = $parents;
        $data['perPage'] = $perPage;
        if ($childrens->isNotEmpty()) {
            $data['childrens'] = $childrens;
        }

        if (!empty($products)) {
            $data['products'] = $products;
            $data['filter'] =   $filter;
        }

        //Условие вывода фильтра по товарам
        //$data['filter'] = 1;

        //dd($data);

        return view('front.category.show', ['data' => $data]);
    }
}
