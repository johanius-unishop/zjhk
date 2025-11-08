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

    // Добавьте новый метод destroy(), который выполнит удаление записи
    #[\Livewire\Attributes\On('destroy')]
    public function destroy(int $id)
    {
        $record = DocumentationType::findOrFail($id);
        $record->delete();

        $this->dispatch('toast-success', message: 'Тип документации успешно удалён!');
        //$this->dispatch('toast', ['message' => 'Валюта удалена.', 'notify' => 'success']);
        //$this->dispatch('toast-success', ['message' => 'Валюта удалена.']);
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
                ->confirm('Вы действительно хотите удалить эту запись?')
                ->dispatch('destroy', ['id' => $row->id]), // Назначаем метод destroy для кнопки delete
        ];
    }
}
