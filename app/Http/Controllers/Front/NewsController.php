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
        $news = News::published()->paginate(perPage: 10)->withQueryString();
        $news->load('media');
        //   dd( $news);

        $data = [
            'news' => $news,
        ];

        return view('front.news.index', ['data' => $data]);
    }


    /**
     * Display the specified resource.
     */
    public function show(  $slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        SEOMeta::setTitle($news->seo->title);
        SEOMeta::setDescription($news->seo->description);
        SEOMeta::setKeywords($news->seo->keywords);

        SEOMeta::setCanonical(config('app.url') . DIRECTORY_SEPARATOR . $news->seo->canonical_url);

// dd($news );

        return view('front.news.show', ['news' => $news]);
    }


}
