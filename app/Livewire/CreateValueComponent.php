<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProductTypePropertyValue;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;
class CreateValueComponent extends Component
{
    // public $value;
    public $formtitle = 'Создание нового значения характеристики';
    public $editform = false;
    #[Rule('required')]
    public $value;
    public $productTypePropertyValue;
    public $productTypeProperty;
    public function mount($productTypeProperty)
    {
        $this->productTypeProperty = $productTypeProperty;

    }
    public function render()
    {
        return view('livewire.create-value-component');
    }

    public function save()
    {
        $validated                             = $this->validate();
        $validated['product_type_property_id'] = $this->productTypeProperty->id;

        //  dd($validated, $this->value );
        ProductTypePropertyValue::create($validated);
        // session()->flash('status', 'product created');

        $this->dispatch('toast', message: 'Запись создана.', notify: 'status');
        $this->dispatch('refresh-products');
        $this->dispatch('$refresh');

        // $this->reset();
    }

    #[On('reset-modal')]
    public function close()
    {
        $this->reset();
    }

    #[On('edit-mode')]
    public function edit($id)
    {
        // dd($id);
        $this->editform                 = true;
        $this->formtitle                = 'Редактирование значения';
        $this->productTypePropertyValue = ProductTypePropertyValue::findOrfail($id);
         $this->value = $this->productTypePropertyValue->value;

    }

    public function update()
    {
        $validated                             = $this->validate();
        $validated['product_type_property_id'] = $this->productTypeProperty->id;

        // dd($validated, $this->value, $this->productTypePropertyValue);
        $p = ProductTypePropertyValue::findOrFail($this->productTypePropertyValue->id);

        // $this->productTypePropertyValue->update($validated);
        $p->update($validated);
        // dd($p, $validated, $this->value, $this->productTypePropertyValue);

        $this->dispatch('refresh-products');
        $this->dispatch('$refresh');

        // $this->reset();

        // session()->flash('status', 'Product updated succesfully');

    }
}