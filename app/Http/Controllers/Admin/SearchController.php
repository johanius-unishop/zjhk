<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class SearchController extends Controller
{

    public function search(Request $request)
    {

        if ($request->filled('searchTerm')) {

            $searchTerm    = $request->searchTerm;
            $searchCount   = Product::query()
                ->search($searchTerm)
                 ->count();
            $search_result = Product::query()
                ->search($searchTerm)
                 ->paginate(12);
            $search_result->appends(['searchTerm' => $searchTerm]);
            // dd($request->all() , $search_result ->links());
            return view('admin.search.index', compact('search_result', 'searchTerm', 'searchCount'));
        } else {
            return redirect()->back()->with('error', 'Пожалуйста, введите что-нибудь для поиска');
        }
    }
}
