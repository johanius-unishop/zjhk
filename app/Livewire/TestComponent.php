<?php

namespace App\Livewire;

use App\Models\ProductType;
use App\Models\ProductPropertyValue;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class TestComponent extends Component
{
    use LivewireAlert;
    public $delete_id;
    public $row_id;
    public $isDisabled = false;
    public $record = '';
    public $product;
    public $productType;
    public $props;
    public $property_test = [];
    public $property_show = [];
    public $showDiv = false;

    #[\Livewire\Attributes\On('editProperty')]
    public function editProperty($rowId): void
    {

        $this->property_show[$rowId] = true;
        //   $showDiv = false;
        //     $this->dispatch('edit-property'  , rowId: $rowId );
    }


    #[\Livewire\Attributes\On('deleteProperty')]
    public function deleteProperty($rowId): void
    {
        $this->delete_id = $rowId;


        $this->confirm('Вы действительно хотите очистить эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // dd( $this->delete_id);
        ProductPropertyValue::where('product_id', $this->record->id)->where('product_type_property_id', $this->delete_id)->delete();
        $this->dispatch('toast', message: 'Запись очищена', notify: 'success');
        $this->dispatch('$refresh');
    }



    public function mount($record = null)
    {
        $this->product = $record;
        $this->record  = $record;


        // $properties = ProductPropertyValue::where('product_id', $this->record->id)->with('value')->get();

        // dd( $properties ,$this->props );
        // foreach ($this->props as $prop) {
        //     $this->property_show[$prop->id] = false;
        //     $this->property_test[$prop->id] = " Пусто ";
        // }
        //   dd( $this->property_show);
    }
    public function render()
    {
        $this->productType = ProductType::where('id', $this->record->product_type_id)->with('props')->first();
        $this->props       = $this->productType->props;
        return view('livewire.test-component', ['productType',  $this->productType ] );
    }
}
