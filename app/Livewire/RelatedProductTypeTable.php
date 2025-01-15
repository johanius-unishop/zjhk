<?php

namespace App\Livewire;


use App\Models\RelatedProductType;
use App\Models\RelatedProduct;
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
use PowerComponents\LivewirePowerGrid\Facades\Rule;

final class RelatedProductTypeTable extends PowerGridComponent
{

    use LivewireAlert;
    public string $tableName = 'RelatedProductTypeTable';
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
        return RelatedProductType::query()
            ->where('product_type_id', '=', $this->parent_type)
            ->withCount('relatedProducts')
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
            ->add('related_products_count');
    }

    public function columns(): array
    {
        return [
            Column::make('Порядок вывода', 'order_column')
                ->editOnClick(),
            Column::make('Название совместимого типа товара', 'name')
                ->editOnClick(),
            Column::make('Количество товаров', 'related_products_count'),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    protected $listeners = [
        'update-related-product-type-table' => 'updateRelatedProductTypeTable',
    ];
    
    #[\Livewire\Attributes\On('update-related-product-type-table')]
    public function updateRelatedProductTypeTable(): void
    {
        $this->dispatch('toast', message: 'Новый совместимый тип товаров добавлен!', notify: 'success');
        $this->refresh();
        $this->render();
    }
    
    
    #[\Livewire\Attributes\On('delete_related_product_type')]
    public function delete_related_product_type($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить этот совместимый тип товаров?', [
            'onConfirmed' => 'confirmed_delete_related_product_type',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed_delete_related_product_type')]
    public function confirmed_delete_related_product_type()
    {
        // Получаем количество записей RelatedProduct
        $deleted_records_related_product_count = RelatedProduct::where('related_product_type_id', $this->delete_id)->count();

        // Удаляем записи RelatedProduct
        if ($deleted_records_related_product_count > 0) {
            RelatedProduct::where('related_product_type_id', $this->delete_id)->delete();
        }

        // Удаляем основную запись RelatedProductType
        $deleted_record = RelatedProductType::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();

        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    #[\Livewire\Attributes\On('up_related_product_type')]
    public function up_related_product_type($rowId): void
    {
        try {
            $relatedProductType = RelatedProductType::findOrFail($rowId);
            $relatedProductType->moveOrderUp();
            $this->dispatch('toast', message: 'Запись успешно поднята вверх.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info($relatedProductType->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось поднять  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }


    #[\Livewire\Attributes\On(event: 'down_related_product_type')]
    public function down_related_product_type($rowId): void
    {
        try {
            $relatedProductType = RelatedProductType::findOrFail($rowId);
            $relatedProductType->moveOrderDown();
            $this->dispatch('toast', message: 'Запись успешно опущена вниз.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info($relatedProductType->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось опустить  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');

    }
    public function actions(RelatedProductType $row): array
    {
        return [
            Button::add('up_related_product_type')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_related_product_type', ['rowId' => $row->id]),
            Button::add('down_related_product_type')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_related_product_type', ['rowId' => $row->id]),
            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('delete_related_product_type', ['rowId' => $row->id])
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
            'name.*'       => 'Название совместимого типа товаров',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название совместимого типа товаров должно быть заполнено',
            'name.*.min'     => 'Название совместимого типа товаров должно содержать минимум 3 символа',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();
    
        $updated = RelatedProductType::query()->find($id)->update([
            $field => $value,
        ]);
    }
}
