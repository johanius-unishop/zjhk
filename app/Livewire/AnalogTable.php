<?php

namespace App\Livewire;

use App\Models\Analog;
use App\Models\AnalogVendor;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;


final class AnalogTable extends PowerGridComponent
{
    use LivewireAlert;
    public string $parent_analog_vendor;

    public array $analog_name;
    public array $analog_article;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput()->withoutLoading(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Product::query()
            ->select(
                'products.id',
                'products.name',
                'products.article',
                'analogies.name as analog_name',
                'analogies.article as analog_article',
            )
            ->leftJoinSub(
                Analog::query()->where('analogies.analog_vendor_id', $this->parent_analog_vendor),
                'analogies',
                'products.id',
                '=',
                'analogies.product_id'
            )
            ;
    }

    public function columns(): array
    {
        $vendor_name = AnalogVendor::findOrFail($this->parent_analog_vendor)->name;
        return [
            Column::make('ID', 'id'),
            Column::make('Модель', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Артикул', 'article')
                ->sortable()
                ->searchable(),
            Column::make('Модель аналога ' . $vendor_name, 'analog_name')
                ->editOnClick(),
            Column::make('Артикул аналога ' . $vendor_name, 'analog_article')
                ->editOnClick(),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    protected function rules()
    {
        return [
            'analog_name.*' => [
            ],
            'analog_article.*' => [
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [

        ];
    }

    protected function messages()
    {
        return [
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        // Получаем модель продукта по ID
        $product = Product::findOrFail($id);

        // Преобразование поля (удаление префикса "analog_")
        $field = str_replace('analog_', '', $field);

        // Находим или создаем запись в таблице аналогий
        $analog = DB::transaction(function () use ($product, $field, $value) {
        // Проверим, существует ли аналог для данного продукта
        $existingAnalog = $product->analogs()->where('analog_vendor_id',$this->parent_analog_vendor)->first();

        if (!$existingAnalog) {
            // Если аналога нет, создадим новый
            $newAnalog = new Analog();
            $newAnalog->product_id = $product->id;
            $newAnalog->analog_vendor_id = $this->parent_analog_vendor;
            $newAnalog->$field = $value;
            $newAnalog->save();

            return $newAnalog;
        } else {
            // Обновляем существующий аналог
            $existingAnalog->$field = $value;
            $existingAnalog->save();

            return $existingAnalog;
        }
    });



    }

}
