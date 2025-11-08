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
        $this->confirm('Вы действительно хотите удалить этот тип документации?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    // Добавьте новый метод destroy(), который выполнит удаление записи
    #[\Livewire\Attributes\On('destroy')]
    public function destroy(int $id)
    {
        dd("Подтверждение получено!");
        $record = DocumentationType::findOrFail($id);
        $record->delete();

        $this->dispatch('toast', message: 'Тип документации успешно удалён.', type: 'success');
    }

    public function actions(DocumentationType $row): array
    {
        return [
            // Оставляем кнопку редактирования без изменений
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.documentation-type.edit', ['documentation_type' => $row->id]),

            // Исправляем обработку удаления записи
            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->confirm('Are you sure you want to edit?')
                  /*  title: 'Подтверждение удаления',
                    content: 'Вы уверены, что хотите удалить этот тип документации?',
                    showCancelButton: true,
                    cancelButtonText: 'Отмена'
                )*/
                ->dispatch('destroy', ['id' => $row->id]), // Назначаем метод destroy для кнопки delete
        ];
    }
}
