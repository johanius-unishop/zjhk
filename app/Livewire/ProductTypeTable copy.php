<?php

namespace App\Livewire;

use App\Models\ProductType ;
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
final class ProductTypeTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public $delete_id;

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
         // ->whereIsRoot() ->withCount('childrens')       return Category::query()->where('root_id', null)->withCount('childrens');
        return ProductType::query()->withCount('props');

    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name', function ($item) {
                return $item->name . ' (' . $item->props_count . ')';
            })
            ->add('composite', fn($item) => $item->composite ? '✅' : '❌')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')->searchable(),
            Column::make('Составной', 'composite'),
            Column::make('Создано', 'created_at')
                ->sortable()
                ->searchable(),
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


}
