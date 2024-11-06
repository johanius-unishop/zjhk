<?php

namespace App\Livewire;

use App\Models\ProductTypeProperty;
use App\Models\ProductTypePropepertyValue;
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
use Illuminate\Support\Facades\Validator;

final class ProductTypePropertyTable extends PowerGridComponent
{

    use LivewireAlert;
    public string $parent_type;
    public array $name;
    public $delete_id;
    public $property_id;
    public function setUp(): array
    {
        return [
            Header::make()->withoutLoading(),
            Footer::make()
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
            ->add('product_type_property_values_count');;
    }

    public function columns(): array
    {
        return [
            Column::make('Порядок вывода', 'order_column'),
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

    #[\Livewire\Attributes\On('post_delete')]
    public function post_delete($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // TODO Удаление
        // $deleted_record = ProductType::where('id', $this->delete_id)-> firstOrFail();
        // // if ($deleted_record->product_count > 0) {
        // //     $this->dispatch('toast', message: 'У этого производителя есть товары. Вначале удалите их!', notify: 'error');
        // //     return;
        // // }
        // $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }

    #[\Livewire\Attributes\On('up')]
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


    #[\Livewire\Attributes\On(event: 'down')]
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

            //Button::add('view')
            //    ->slot('<i class="fas fa-edit"></i>')
            //    ->class('btn btn-primary')
            //    ->route('admin.product_type_property.edit', ['product_type_property' => $row->id]),
            Button::add('up')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up', ['rowId' => $row->id]),
            Button::add('down')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down', ['rowId' => $row->id]),
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
        $this->skipRender();
    }

}
