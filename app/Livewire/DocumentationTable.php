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
use Illuminate\Support\Facades\Log;

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
            ->add('title')
            ->add('homepage_visible');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Название документа', 'title')
                ->sortable()
                ->editOnClick(hasPermission: true, saveOnMouseOut: true)
                ->searchable(),
            Column::make('Показывать на главной', 'homepage_visible')
                ->toggleable(),

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
        $buttons = [];
        $documentation = Documentation::find($row->id);

        // Получаем текущий минимальный порядок сортировки
        $minOrder = Documentation::min('order_column');
        // Получаем текущий максимальный порядок сортировки
        $maxOrder = Documentation::max('order_column');
        // Текущий порядок текущего документа
        $currentOrder = $documentation->order_column;

        $buttons[] = Button::add('edit')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.documentation.edit', ['documentation' => $row->id]);

        // Проверяем, находится ли документ на вершине
        if ($currentOrder <= $minOrder) {
            // Если документ уже наверху, делаем кнопку неактивной
            $buttons[] = Button::add('up_document')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success disabled') // Добавляем класс disabled, чтобы кнопка выглядела неактивной
                ->attributes(['disabled' => 'disabled']); // Добавляем атрибут disabled, чтобы кнопка была интерактивно неактивной
        } else {
        // Если документ не наверху, оставляем кнопку активной
            $buttons[] = Button::add('up_document')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_document', ['rowId' => $row->id]);
        }


        // Условие для показа кнопки перемещения вниз
        $buttons[] = Button::add('down_document')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_document', ['rowId' => $row->id]);

        $buttons[] = Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->confirm('Вы действительно хотите удалить этот документ?')
                ->dispatch('doc_delete', ['id' => $row->id]);

        return $buttons;
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

    #[\Livewire\Attributes\On(event: 'down_document')]
    public function down_document($rowId): void
    {
        try {
            $document = Documentation::findOrFail($rowId);
            $down = $document->down();
            if ($down) {
                $this->dispatch('toast', message: 'Документ перемещен вниз.', notify: 'success');
            } else {
                $this->dispatch('toast', message: 'Документ не перемещен.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($document->title . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось переместить документ вниз.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

    #[\Livewire\Attributes\On(event: 'up_document')]
    public function up_document($rowId): void
    {
        try {
            $document = Documentation::findOrFail($rowId);
            $up = $document->up();
            if ($up) {
                $this->dispatch('toast', message: 'Документ перемещен вверх.', notify: 'success');
            } else {
                $this->dispatch('toast', message: 'Документ не перемещен.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($document->title . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось переместить документ вверх.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }
}
