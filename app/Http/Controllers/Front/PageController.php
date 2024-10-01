<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
class PageController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {

        // $new_item = News::where('slug', $slug)->firstOrFail();
        SEOMeta::setTitle($page->seo->title);
        SEOMeta::setDescription($page->seo->description);
        SEOMeta::setKeywords($page->seo->keywords);

        // SEOMeta::setCanonical(config('app.url') . DIRECTORY_SEPARATOR . $page->seo->canonical_url);
        return view('front.news.show', ['news' => $page]);
    }
}
