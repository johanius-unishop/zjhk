<?php

namespace App\Livewire;

use Livewire\Component;

class ProductFileUploadComponent extends Component
{

    public $record, $media_id;
    public function render()
    {
        return view('livewire.product-file-upload-component');
    }
}
