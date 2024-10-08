<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;
use App\Http\Requests\Front\SearchRequest;

class SearchController extends Controller
{
    public function search(SearchRequest $request)
    {
        //  ->active()
        $searchTerm    = $request->searchTerm;
        $searchCount   = Product::query()
            ->search($searchTerm)

            ->published()->count();
        $search_result = Product::query()
            ->search($searchTerm)
            ->published()
            ->paginate(12);
        $search_result = checkInCartAndFavourites($search_result);
        $search_result->appends(['searchTerm' => $searchTerm]);
        // dd(   $search_result);


        SEOMeta::setTitle("Результаты поиска по сайту");
        SEOMeta::setDescription("Результаты поиска по сайту");

        return view('front.search.show', compact('search_result', 'searchTerm', 'searchCount'));


    }

}
