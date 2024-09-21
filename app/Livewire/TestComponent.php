<?php

namespace App\Livewire;

use App\Models\ProductType;
use Livewire\Component;

class TestComponent extends Component
{

    public $isDisabled = false;
    public $record = '';

    public $productType;
    public $props;
    public function mount($record = null)
    {

        $this->record = $record;
        // $this->productType = ProductType::where('id', $this->record->product_type_id)->with('props')->get();
        $this->productType = ProductType::where('id', $this->record->product_type_id)->with('props')->first();
        $this->props       = $this->productType->props;
        // dd($this->record, $this->productType, $this->props);
    }
    public function render()
    {
        return view('livewire.test-component');
    }
}
