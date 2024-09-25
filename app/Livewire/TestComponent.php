<?php

namespace App\Livewire;

use App\Models\ProductType;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class TestComponent extends Component
{
    use LivewireAlert;
    public $delete_id;
    public $isDisabled = false;
    public $record = '';

    public $productType;
    public $props;




    #[\Livewire\Attributes\On('deleteProperty')]
    public function deleteProperty($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите очистить  эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // TODO Удаление
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }









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
