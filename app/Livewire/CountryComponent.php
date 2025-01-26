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

    #[Validate('required|min:3')]
    public $name_in_english = '';

    #[Validate('required|min:2|max:2')]
    public $charcode = '';


    public function save()
    {
        // Выполняем валидацию данных
        $this->validate();

        // Предположим, что данные были успешно сохранены
        Country::create([
            'name' => $this->name,
            'name_in_english' => $this->name_in_english,
            'charcode' => $this->charcode,
        ]);
    
        // Сбрасываем значения полей
        $this->reset('name', 'name_in_english', 'charcode');
        $this->dispatch('update-country-table');
        
    }

    protected function messages()
    {
        return [
            'name.required'     => 'Название страны должно быть заполнено',
            'name.min'     => 'Название страны должно содержать минимум 3 символа',
            'name_in_english.required'     => 'Название на английском должно быть заполнено',
            'name_in_english.min'     => 'Название на английском должно содержать минимум 3 символа',
            'name.required'     => 'Символьный код должен быть указан',
            'charcode.min'     => 'Символьный код должен состоять из 2-х символов',
            'charcode.max'     => 'Символьный код должен состоять из 2-х символов',
        ];
    } 

    public function render()
    {
        return view('livewire.country-component');
    }
}