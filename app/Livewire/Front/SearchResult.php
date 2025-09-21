<?php

namespace App\Livewire\Front;

use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class SearchResult extends Component
{

    public $search;
    public function render()
    {
        $searchResults = null;

        return view('livewire.front.search-result', compact('searchResults'));
    }
}
