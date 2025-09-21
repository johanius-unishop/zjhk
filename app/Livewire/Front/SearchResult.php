<?php

namespace App\Livewire\Front;

use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class SearchResult extends Component
{
    public function render()
    {


        return view('livewire.front.search-result');
    }
}
