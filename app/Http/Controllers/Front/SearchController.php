<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\ViewModels\ProductViewModel;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm    = $request->searchTerm;
        $searchCount   = Product::query()
            ->search($searchTerm)
            ->active()
            ->moderated()->count();
        $search_result = Product::query()
            ->search($searchTerm)
            ->active()
            ->moderated()
            ->paginate(12);
        $search_result = checkInFavourites($search_result);
        $search_result->appends(['searchTerm' => $searchTerm]);
        // return view('front.search.show', ['data' => $data]);

        return view('front.search.show', compact('search_result', 'searchTerm', 'searchCount'));


    }

}
