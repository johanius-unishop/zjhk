<?php

namespace App\Livewire;

use App\Models\ProductCompositeElement;
use App\Models\ProductTypeCompositeElement;
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
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Log;

final class ProductTypeCompositeTable extends PowerGridComponent
{
    use LivewireAlert;
    public string $tableName = 'ProductTypeCompositeTable';
    public string $parent_type;
    public array $name;
    public $delete_id;
    
    public function setUp(): array
    {
        return [
            Header::make()->withoutLoading(),
            Footer::make()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return ProductTypeCompositeElement::query()
            ->where('product_type_id', '=', $this->parent_type)
            //->withCount('compositeElements')
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
            ->add('name');
    }

    public function columns(): array
    {
        return [
            Column::make('Порядок вывода', 'order_column')->editOnClick(),
            Column::make('Название типа товара из комплекта', 'name')->searchable()->editOnClick(),
            //Column::make('Количество товаров', 'composite_elements_count'),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('update-product-type-composite-table')]
    public function updateProductTypeCompositeTable(): void
    {
        $this->dispatch('toast', message: 'Новый тип товаров для комплекта добавлен!', notify: 'success');
        $this->refresh();
        $this->render();
    }

    #[\Livewire\Attributes\On('delete_product_type_composite_table')]
    public function delete_product_type_composite_table($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить этот тип товаров из комплекта?', [
            'onConfirmed' => 'confirmed_delete_product_type_composite',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed_delete_product_type_composite')]
    public function confirmed_delete_product_type_composite()
    {
        // Получаем количество записей RelatedProduct
        $deleted_records_product_composite_count = ProductCompositeElement::where('product_type_composite_element_id', $this->delete_id)->count();

        // Удаляем записи RelatedProduct
        if ($deleted_records_product_composite_count > 0) {
            ProductCompositeElement::where('product_type_composite_element_id', $this->delete_id)->delete();
        }

        // Удаляем основную запись RelatedProductType
        $deleted_record = ProductTypeCompositeElement::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();

        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    #[\Livewire\Attributes\On('up_composite_type')]
    public function up_composite_type($rowId): void
    {
        try {
            $composite_type = ProductTypeCompositeElement::findOrFail($rowId);
            $composite_type->moveOrderUp();
            $this->dispatch('toast', message: 'Запись успешно поднята вверх.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info($composite_type->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: 'Не удалось поднять  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }


    #[\Livewire\Attributes\On('down_composite_type')]
    public function property_down($rowId): void
    {
        try {
            $composite_type = ProductTypeCompositeElement::findOrFail($rowId);
            $composite_type->moveOrderDown();
            $this->dispatch('toast', message: 'Запись успешно опущена вниз.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info($composite_type->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: 'Не удалось опустить  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');

    }
    public function actions(ProductTypeCompositeElement $row): array
    {
        return [


          /*  Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.product_type_property.edit', ['product_type_property' => $row->id]),*/
            Button::add('up')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_composite_type', ['rowId' => $row->id]),
            Button::add('down')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_composite_type', ['rowId' => $row->id]),
            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('delete_product_type_composite_table', ['rowId' => $row->id]),
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();
    
        $updated = ProductTypeCompositeElement::query()->find($id)->update([
            $field => $value,
        ]);
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
            'name.*'       => 'Название типа товара из комплекта',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название типа товара из товара должно быть заполнено',
            'name.*.min'     => 'Название типа товара из товара должно содержать минимум 3 символа',
        ];
    }
}
