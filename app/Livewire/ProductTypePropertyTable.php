<?php

namespace App\Livewire;

use App\Models\ProductPropertyValue;
use App\Models\ProductTypeProperty;
use App\Models\ProductTypePropepertyValue;
use App\Models\ProductTypePropertyValue;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;

use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use PowerComponents\LivewirePowerGrid\Facades\Rule;

final class ProductTypePropertyTable extends PowerGridComponent
{

    use LivewireAlert;
    public string $tableName = 'ProductTypePropertyTable';
    public string $parent_type;
    public array $name;
    public $delete_id;
    public $property_id;
    public function setUp(): array
    {
        return [
            PowerGrid::header()->withoutLoading(),
            PowerGrid::footer()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return ProductTypeProperty::query()
            ->where('product_type_id', '=', $this->parent_type)
            ->withCount('productTypePropertyValues')
            ->orderBy('order_column');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('order_column')
            ->add('name')
            ->add('section')
            ->add('product_type_property_values_count');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Порядок вывода', 'order_column')
                ->editOnClick(),
            Column::make('Название харктеристики/секции', 'name')
                ->editOnClick(),
            Column::make('Является секцией', 'section')
                ->toggleable(),
                Column::make('Количество вариантов значений', 'product_type_property_values_count'),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('update-product-type-property-table')]
    public function updateProductTypePropertyTable(): void
    {
        $this->dispatch('toast', message: 'Новая характеристика добавлена!', notify: 'success');
        $this->refresh();
        $this->render();
    }


    #[\Livewire\Attributes\On('delete_property')]
    public function delete_property($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить эту характеристику/секцию?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // Получаем количество записей ProductTypePropertyValue
        $deleted_records_value_count = ProductTypePropertyValue::where('product_type_property_id', $this->delete_id)->count();

        // Получаем количество записей ProductPropertyValue
        $deleted_records_product_value_count = ProductPropertyValue::where('product_type_property_id', $this->delete_id)->count();

        // Удаляем записи ProductTypePropertyValue
        if ($deleted_records_value_count > 0) {
            ProductTypePropertyValue::where('product_type_property_id', $this->delete_id)->delete();
        }

        // Удаляем записи ProductPropertyValue
        if ($deleted_records_product_value_count > 0) {
            ProductPropertyValue::where('product_type_property_id', $this->delete_id)->delete();
        }

        // Удаляем основную запись ProductTypeProperty
        $deleted_record = ProductTypeProperty::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();

        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    #[\Livewire\Attributes\On('up_property')]
    public function property_up($rowId): void
    {
        try {
            $property = ProductTypeProperty::findOrFail($rowId);
            $property->moveOrderUp();
            $this->dispatch('toast', message: 'Запись успешно поднята вверх.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info('Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось поднять  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }


    #[\Livewire\Attributes\On(event: 'down_property')]
    public function property_down($rowId): void
    {
        try {
            $property = ProductTypeProperty::findOrFail($rowId);
            $property->moveOrderDown();
            $this->dispatch('toast', message: 'Запись успешно опущена вниз.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info($property->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось опустить  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');

    }
    public function actions(ProductTypeProperty $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.product_type_property.show', ['product_type_property' => $row->id]),
            Button::add('up_property')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_property', ['rowId' => $row->id]),
            Button::add('down_property')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_property', ['rowId' => $row->id]),
            Button::add('delivery')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('delete_property', ['rowId' => $row->id]),
            ];
    }

    public function actionRules($row): array
    {
        return [
            Rule::button('view')
            ->when(fn ($product_type_property) => $product_type_property->section == true)
            ->hide(),
            Rule::rows()
            ->when(fn ($product_type_property) => $product_type_property->product_type_property_values_count != 0)
            ->hideToggleable(),
        ];
    }

    protected function rules()
    {
        return [
            'name.*' => [
                'required',
                'min:3',
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название характеристики',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название характеристики должно быть заполнено',
            'name.*.min'     => 'Название характеристики должно содержать минимум 3 символа',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $updated = ProductTypeProperty::query()->find($id)->update([
            $field => $value,
        ]);
    }


    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        ProductTypeProperty::query()->find($id)->update([
            $field => e($value),
        ]);

        //$this->skipRender();
    }



}
