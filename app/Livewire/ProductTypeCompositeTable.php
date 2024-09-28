<?php

namespace App\Livewire;

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
    use WithExport;
    use LivewireAlert;
    public string $parent_category;
    public $delete_id;
    public $property_id;
    public function setUp(): array
    {
        // $this->showCheckBox();

        return [

            Header::make(),
            Footer::make()

                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        //   /  return ProductTypeCompositeElement::query();

        return ProductTypeCompositeElement::query()->where(column: 'product_type_id', operator: $this->parent_category)->orderBy('order_column');

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
            ->add('product_type_id')
            ->add('order_column');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name'),
            // Column::make('Создано', 'created_at')
            //     ->sortable()
            //     ->searchable(),

            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('up')]
    public function property_up($rowId): void
    {
        try {
            $property = ProductTypeCompositeElement::findOrFail($rowId);
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
            $property = ProductTypeCompositeElement::findOrFail($rowId);
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
    public function actions(ProductTypeCompositeElement $row): array
    {
        return [


            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.product_type_property.edit', ['product_type_property' => $row->id]),
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

        // return [
        //     Button::add('edit')
        //         ->slot('Edit: '.$row->id)
        //         ->id()
        //         ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
        //         ->dispatch('edit', ['rowId' => $row->id])
        // ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
