<?php

namespace App\Livewire;

use App\Models\ProductType;
use App\Models\ProductTypeProperty;
use App\Models\ProductTypePropertyValue;
use App\Models\ProductPropertyValue;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\DB;
final class ProductTypeTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public $delete_id;

    public array $name;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    // public bool $deferLoading = true;
    public function setUp(): array
    {
        // $this->showCheckBox();

        return [

            Header::make()->showSearchInput()->withoutLoading(),
            Footer::make()
                // ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return ProductType::query()->withCount('properties');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('properties_count');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Название типа товара (в единственном числе)', 'name')->searchable()->sortable()->editOnClick(),
            Column::make('Количество характеристик', 'properties_count'),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }


   /* #[\Livewire\Attributes\On('post_delete')]
    public function post_delete($rowId): void
    {
        $this->delete_id = $rowId;
        
        $this->confirm('Вы действительно хотите удалить эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }*/
    #[\Livewire\Attributes\On('post_delete')]
    public function post_delete($rowId): void
    {
        $this->delete_id = $rowId;

        $propertiesCount = ProductTypeProperty::where('product_type_id', $this->delete_id)->count();

        if ($propertiesCount > 0) {
            $this->confirm("В БД имеются связанные с этим типом товара характеристики. Действительно ли вы хотите удалить этот тип товара и все связанные с ним характеристики?", [
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет',
            ]);
        } else {
            $this->confirm("Действительно ли вы хотите удалить этот тип товара?", [
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет',
            ]);
        }
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        try {
            DB::transaction(function () {
                // Получаем IDs всех связанных записей из таблицы product_type_properties
                $productTypePropertyIds = ProductTypeProperty::where('product_type_id', $this->delete_id)->pluck('id');

                // Массово удаляем все связанные записи из таблиц product_type_property_values и product_property_values
                ProductTypePropertyValue::whereIn('product_type_property_id', $productTypePropertyIds)->delete();
                ProductPropertyValue::whereIn('product_type_property_id', $productTypePropertyIds)->delete();

                // Удаляем все связанные записи из таблицы product_type_properties
                ProductTypeProperty::where('product_type_id', $this->delete_id)->delete();

                // Удаляем запись из таблицы product_types
                ProductType::where('id', $this->delete_id)->delete();
            });

            $this->dispatch('toast', message: 'Тип товара и все связанные характеристики были успешно удалены.', notify: 'success');
        } catch (\Exception $e) {
            $this->dispatch('toast', message: 'Произошла ошибка при удалении типа товара. Попробуйте позже.', notify: 'error');
        }
    }

    /*#[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // TODO Удаление
        // 1. Проверить есть ли у удаляемого типа товара характеристики
        // если есть то вывести предупреждение, что вместе с типом товара будут удалено столько то характеристик, назначенных этому типу
        // получить подтверждение пользователя и удалить все присущие характерситики и все занчения характеристик назначенные товарам удаляемого типа
        // $deleted_record = ProductType::where('id', $this->delete_id)-> firstOrFail();
        // // if ($deleted_record->product_count > 0) {
        // //     $this->dispatch('toast', message: 'У этого производителя есть товары. Вначале удалите их!', notify: 'error');
        // //     return;
        // // }

        // $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }
        */
    public function actions(ProductType $row): array
    {
        return [

            Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.product_type.show', ['product_type' => $row->id]),
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.product_type.edit', ['product_type' => $row->id]),
              Button::add('delivery')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];
    }

    protected function rules()
    {
        return [
            'name.*' => [
                'required',
                Rule::unique('product_types','name')->ignore($this->id ?? null),
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название типа товара (в единственном числе)',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название типа товара должно быть заполнено',
            'name.*.unique'     => 'Название типа товара должно быть уникально',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();
    
        $updated = ProductType::query()->find($id)->update([
            $field => $value,
        ]);
    }


}
