<?php

namespace App\Livewire\Front;


use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product as ModelsProduct;

class SearchResult extends Component
{
    public $search = '';
    public $searchResults;

    public function render()
    {
        if (empty($this->search)) {
            $this->searchResults = ModelsProduct::get();
        } else {
            $this->searchResults = ModelsProduct::search($this->search)->get();
        }

        return view('livewire.front.search-result');
    }
}
