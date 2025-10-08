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

        $filter = 0; //Вывод боковой панели фильтра отключен, чтобы включить, нужно передать 1

        $perPage = 12;

        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;


        $childrens = Category::defaultOrder()
            ->where('parent_id', $category->id)
            ->get();
        $parents = $category->ancestors->toArray();


        SEOMeta::setTitle($category->seo->title);
        SEOMeta::setDescription($category->seo->description);
        SEOMeta::setKeywords($category->seo->keywords);

        $data['acceptsWebP'] = $acceptsWebP;

        $data['category'] = $category;
        $data['parents'] = $parents;
        $data['perPage'] = $perPage;
        if ($childrens->isNotEmpty()) {
            $data['childrens'] = $childrens;
        }

        if (!empty($category->products)) {
            $data['category'] = $category;
            $data['filter'] =   $filter;

        }

        //Условие вывода фильтра по товарам
        //$data['filter'] = 1;

        //dd($data);

        return view('front.category.show', ['data' => $data]);
    }
}
