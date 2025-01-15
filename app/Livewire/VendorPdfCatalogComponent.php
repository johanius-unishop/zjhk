<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\VendorPdfCatalog;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithEvents;

class VendorPdfCatalogComponent extends Component
{
    use LivewireAlert;
    public $parent_vendor;
    public $name;
    
    public function mount($parent_vendor)
    {
        $this->parent_vendor = $parent_vendor;
    }

    public function addCatalog()
    {
        // Валидируем данные
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            // Создаем новую запись
            $catalog = VendorPdfCatalog::create(array_merge(
                $validatedData,
                ['vendor_id' => $this->parent_vendor->id]
            ));

            $this->reset('name');
            $this->dispatch('update-vendor-pdf-catalog-table');

        } catch (\Exception $e) {
            // Ловим возможные исключения и показываем сообщение об ошибке
            $this->dispatch('toast', message: 'Не удалось создать каталог. Попробуйте позже.', notify: 'danger');
        }
    }

    public function render()
    {
        return view('livewire.vendor-pdf-catalog-component');
    }
}