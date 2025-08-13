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
use Illuminate\Support\Facades\DB;

final class ProductTypePropertyValueTable extends PowerGridComponent
{

    use LivewireAlert;
    public string $tableName = 'ProductTypePropertyValueTable';
    public string $parent_property;
    public array $value;
    public $delete_id;

    public function setUp(): array
    {
        return [
            PowerGrid::header()->withoutLoading(),
            PowerGrid::footer()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return ProductTypePropertyValue::query()
        ->where('product_type_property_id', '=', $this->parent_property)
        ->withCount('productPropertyValues')
        ->orderBy('value', 'asc');
    }



    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('value')
            ->add('product_property_values_count');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Вариант значения характеристики', 'value')
                ->editOnClick(),
            Column::make('Количество товаров с этим значением', 'product_property_values_count'),
            Column::action('Действия'),
        ];
    }

    public function actionRules($row): array
    {
        // Получаем количество связанных записей product_property_values
        $count = $row->productPropertyValues()->count();

        return [
            Rule::button('delete')
                ->when(fn () => $count > 0)
                ->hide(),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    protected $listeners = [
        'update-product-type-property-value-table' => 'updateProductTypePropertyValueTable',
    ];

    #[\Livewire\Attributes\On('update-product-type-property-value-table')]
    public function updateProductTypePropertyValueTable(): void
    {
        $this->dispatch('toast', message: 'Новое значение для характеристики добавлено!', notify: 'success');
        $this->refresh();
        $this->render();
    }


    #[\Livewire\Attributes\On('delete_value')]
    public function delete_value($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить это значение для характеристики?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // Получаем количество записей ProductPropertyValue
        $deleted_records_product_value_count = ProductPropertyValue::where('product_type_property_value_id', $this->delete_id)->count();

        // Удаляем записи ProductPropertyValue
        if ($deleted_records_product_value_count > 0) {
            ProductPropertyValue::where('product_type_property_value_id', $this->delete_id)->delete();
        }

        // Удаляем основную запись ProductTypePropertyValue
        $deleted_record = ProductTypePropertyValue::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();

        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    public function actions(ProductTypePropertyValue $row): array
    {
        return [
            /*Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.product_type_property.show', ['product_type_property' => $row->id]), */
            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('delete_value', ['rowId' => $row->id]),
            ];
    }


    protected function rules()
    {
        return [
            'value.*' => [
                'required',
                'min:1',
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'value.*'       => 'Вариант значения для характеристики',
        ];
    }

    protected function messages()
    {
        return [
            'value.*.required'     => 'Вариант значения для характеристики должен быть заполнено',
            'value.*.min'     => 'Вариант значения для характеристики должен содержать минимум 1 символ',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $updated = ProductTypePropertyValue::query()->find($id)->update([
            $field => $value,
        ]);
    }
}
