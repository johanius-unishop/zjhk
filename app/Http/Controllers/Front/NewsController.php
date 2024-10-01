<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        SEOMeta::setTitle('Новости');
        SEOMeta::setDescription('Новости нашего сайта');
        SEOMeta::setKeywords('Новости новинки анонсы');
        $news = News::active()->paginate(10);
        return view('front.news.index', compact($news));
    }


    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        // $new_item = News::where('slug', $slug)->firstOrFail();
        SEOMeta::setTitle($news->seo->title);
        SEOMeta::setDescription($news->seo->description);
        SEOMeta::setKeywords($news->seo->keywords);

        SEOMeta::setCanonical(config('app.url') . DIRECTORY_SEPARATOR . $news->seo->canonical_url);
        return view('front.news.show', ['news' => $news]);
    }


}
