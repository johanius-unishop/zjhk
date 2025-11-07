<?php

namespace App\Livewire;

use App\Models\DocumentationType;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class DocumentationTypeTable extends PowerGridComponent
{
    use LivewireAlert;
    public $delete_id;
    public string $tableName = 'documentation-type-table';
    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return DocumentationType::query();
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
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Создано', field: 'created_at'),
            Column::action('Действия'),
        ];
    }

    #[\Livewire\Attributes\On('doc_type_delete')]
    public function doc_type_delete($rowId): void
    {
        $this->delete_id = $rowId;
        dd($this->delete_id);
        $this->confirm('Вы действительно хотите удалить этот тип документации?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        $deleted_record = DocumentationType::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }

    public function actions(DocumentationType $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.documentation-type.edit', ['documentation_type' => $row->id]),
            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('doc_type_delete', ['rowId' => $row->id]),
        ];


    }
}
