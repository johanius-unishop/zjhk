<?php

namespace App\Livewire;

use App\Models\Category;
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

final class SubcategoryTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public string $parent_category;
    public $delete_id;
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                // ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Category::query()->where('root_id', $this->parent_category)->withCount('childrens');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name', function ($dish) {
                return $dish->name . ' (' . $dish->childrens_count . ')';
            })
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')
                ->sortable()
                ->searchable(),



            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            Column::action('Действия')
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
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }
    public function actions(Category $row): array
    {
        return [

            Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.category.show', ['category' => $row->id]),
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.category.edit', ['category' => $row->id]),
                Button::add('Delete')
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
