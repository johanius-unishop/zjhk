<?php

namespace App\Livewire;

use App\Models\DeliveryMethod ;
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
final class DeliveryTable extends PowerGridComponent
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
        return DeliveryMethod::query();
        // ->whereIsRoot() ->withCount('childrens')       return Category::query()->where('root_id', null)->withCount('childrens');

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
            ->add('comment')


            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')->searchable(),
            Column::make('Комментарий', 'comment')->searchable(), 

            Column::make('Created at', 'created_at')
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

        $deleted_record = DeliveryMethod::where('id', $this->delete_id)-> firstOrFail();
        // if ($deleted_record->product_count > 0) {
        //     $this->dispatch('toast', message: 'У этого производителя есть товары. Вначале удалите их!', notify: 'error');
        //     return;
        // }

        // if ($deleted_record->seo()->exists()) {
        //     $deleted_record->seo()->delete();
        // }
        // if ($deleted_record->media()->exists()) {
        //     $deleted_record->media()->delete();
        // }
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }
    public function actions(DeliveryMethod $row): array
    {
        return [

            // Button::add('view')
            //     ->slot('<i class="fas fa-folder"></i>')
            //     ->class('btn btn-primary')
            //     ->route('admin.delivery.show', ['currency' => $row->id]),
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.delivery.edit', ['delivery' => $row->id]),
            Button::add('delivery')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];
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
