<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Vendor;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class NewOrderComponent extends Component
{
    use LivewireAlert;
        
    public $amount;
    public $vendors;
    public $vendor_id = 0; // Начальное значение установлено в 0


    public function mount()
    {
        $this->amount = 1000000;   
        $this->vendors = Vendor::all();
    }

    public function save()
    {
        // Выполняем валидацию перед сохранением
        $this->validate([
            'vendor_id' => 'required|integer|min:1',
        ]);
        
        // Проверяем, выбран ли вендор
        if ($this->vendor_id > 0) {
            // Выполняем дальнейшие действия, если вендор выбран
            $products = Product::where('minimum_stock', '>', 0)->get();
            
        } else {
            // Сообщаем пользователю, что нужно выбрать вендора
            
            $this->dispatch('toast', [
                'message' => 'Необходимо выбрать поставщика',
                'notify' => 'status'
            ]);
        }
    }

    protected function rules()
    {
        return [
            'vendor_id' => 'required|integer|min:1', // Добавьте нужные правила валидации
        ];
    }

    protected function messages()
    {
        return [
            'vendor_id.required' => 'Необходимо выбрать поставщика.', // Кастомное сообщение для правила required
            'vendor_id.integer' => 'Необходимо выбрать поставщика.',
            'vendor_id.min' => 'Необходимо выбрать поставщика.',
        ];
    }

    public function render()
    {
        return view('livewire.new-order-component', ['amount' => $this->amount, 'vendors' => $this->vendors]);
    }
}