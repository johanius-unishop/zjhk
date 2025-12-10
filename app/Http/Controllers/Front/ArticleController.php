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
        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;

        SEOMeta::setTitle('Статьи');
        SEOMeta::setDescription('Список статей');
        SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.article.index', ['acceptsWebP' => $acceptsWebP]);
    }



    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $acceptsWebP = strpos(request()->header('accept'), 'image/webp') !== false;

        $article = Article::published()->where('slug', $slug)->firstOrFail();

        $title = 'Статья: ' . $article->name;

        if ($article) {
            $articlePage = 'front.static-page.articles.article-' . ($article->id);
            if (!view()->exists($articlePage)) {
                abort(404); // Выдача страницы 404
            }
        }

        //SEOMeta::setTitle('Производители');
        //SEOMeta::setDescription('Список производителей');
        //SEOMeta::setKeywords('Производители бренды вендоры');
        return view('front.article.show', compact('acceptsWebP', 'articlePage', 'article', 'title'));
    }




}
