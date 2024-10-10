<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $items = Article::published()->paginate(perPage: 10)->withQueryString();
        $items->load('media');
        //   dd( $news);

        $data = [
            'items' => $items,
        ];

        SEOMeta::setTitle('Производители');
        SEOMeta::setDescription('Список производителей');
        SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.article.index', ['data' => $data]);

    }



    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $item   = Article::published()->where('slug', $slug)->firstOrFail();
         //   dd( $products );
        $data     = [
            'item' => $item,
         ];

        SEOMeta::setTitle('Производители');
        SEOMeta::setDescription('Список производителей');
        SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.article.show', ['data' => $data]);
    }




}
