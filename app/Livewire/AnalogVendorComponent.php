<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\AnalogVendor;
use App\Models\Analog;
class AnalogVendorComponent extends Component
{

    public $isDisabled = false;
    public $record = '';

    public $analogVendors;
    public $props;


    public function mount($record = null)
    {

        $this->record        = $record;
        $this->analogVendors = AnalogVendor::get(['id', 'name']);
        // $this->productType = ProductType::where('id', $this->record->product_kind_id)->with('props')->first();
        // $this->props       = $this->productType->props;
        // dd($this->record, $this->productType, $this->props);
    }

    public function render()
    {
        return view('livewire.analog-vendor-component');
    }
}
