<?php

namespace App\Livewire\Front;


use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Product as ModelsProduct;

class SearchResult extends Component
{
    public $search = '';
    public $searchResults;
    public $visible = false;

    public function render()
    {
        if (strlen(trim($this->search)) > 2) {
            $this->visible = true;
            $this->searchResults = ModelsProduct::search($this->search)->get();
        } else {
            $this->visible = false;
        }

        return view('livewire.front.search-result');
    }
}
