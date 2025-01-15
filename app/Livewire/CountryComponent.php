<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Country;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class CountryComponent extends Component
{
    use LivewireAlert;
        
    #[Validate('required|min:3')]
    public $name = '';


    public function save()
    {
        $this->validate();

        Country::create(
                $this->only(['name'])
            );
        $this->reset('name');
        $this->dispatch('update-country-table');
        return;
    }

    protected function messages()
    {
        return [
            'name.required'     => 'Название страны должно быть заполнено',
            'name.min'     => 'Название страны должно содержать минимум 3 символа',
        ];
    } 

    public function render()
    {
        return view('livewire.country-component');
    }
}