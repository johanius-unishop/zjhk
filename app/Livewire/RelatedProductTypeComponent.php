<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\RelatedProductType;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class RelatedProductTypeComponent extends Component
{
    use LivewireAlert;

    public string $parent_category;
    public $delete_id;
    public $property_id;
    public $relatedProductTypes;
    public $name = '';
    public $isDisabled = false;
    public function mount($parent_category = null)
    {

        $this->parent_category     = $parent_category;
        $this->relatedProductTypes = RelatedProductType::ordered()->where('product_type_id', $this->parent_category)->get(['id', 'name', 'order_column']);
    }


    public function save()
    {
        try {
            RelatedProductType::create([
                'name' => $this->name,
                'product_type_id' => $this->parent_category,
            ]);
            $this->dispatch('toast', message: 'Запись успешно добавлена.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info('Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: 'Ошибка! Не удалось добавить запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }
    public function down($rowId)
    {
        try {
            $property = RelatedProductType::findOrFail($rowId);
            $property->moveOrderDown();
            $this->dispatch('toast', message: 'Запись успешно поднята вверх.', notify: 'success');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: 'Ошибка! Не удалось добавить запись.' . $th->getMessage(), notify: 'error');
            Log::info('Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось поднять  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');

    }
    public function up($rowId)
    {
        try {
            $property = RelatedProductType::findOrFail($rowId);
            $property->moveOrderUp();
            $this->dispatch('toast', message: 'Запись успешно поднята вверх.', notify: 'success');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: 'Ошибка! Не удалось добавить запись.' . $th->getMessage(), notify: 'error');
            Log::info('Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось поднять  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }
    public function render()
    {
        return view('livewire.related-product-type-component');
    }
}
