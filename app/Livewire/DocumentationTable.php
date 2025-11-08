<?php
// Рабочая таблица
namespace App\Livewire;

use App\Models\Documentation;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class DocumentationTable extends PowerGridComponent
{
    public int|null $delete_id = null;

    public string $tableName = 'documentation-table';
    public array $title;
    public array $text;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): ?Builder
    {
        return Documentation::query();
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('title');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Название документа', 'title')
                ->sortable()
                ->editOnClick(hasPermission: true, saveOnMouseOut: true)
                ->searchable(),

            Column::action('Действия')
        ];
    }

    protected function rules()
    {
        return [
            'title.*' => [
                'required',
                'unique',
            ],

        ];
    }

    protected function validationAttributes()
    {
        return [
            'title.*'       => 'Название документа',
        ];
    }

    protected function messages()
    {
        return [
            'title.*.required'     => 'Название документа является обязательным полем',
            'title.*.unique'     => 'Название документа должно быть уникальным',
        ];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(Documentation $row): array
    {
        return [
            Button::add('edit')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.documentation.edit', ['documentation' => $row->id]),

            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->confirm('Вы действительно хотите удалить этот документ?')
                ->dispatch('doc_delete', ['id' => $row->id]),
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        Documentation::query()->find($id)->update([
            $field => e($value),
        ]);
    }

    public function relationSearch(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('doc_delete')]
    public function doc_delete(int $id): void
    {
        $record = Documentation::findOrFail($id);
        $record->delete();

        $this->dispatch('toast-success', message: 'Документ успешно удалён!');
    }
}
