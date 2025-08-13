<?php

namespace App\Livewire;

use App\Models\Analog;
use App\Models\AnalogVendor;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class AnalogVendorTable extends PowerGridComponent
{
    use LivewireAlert;
    public $delete_id;
    public string $tableName = 'analog-vendor-table';
    public array $name;
    public bool $showErrorBag = true;
    public $editingRow = null;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';
    public $currentId;

    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput()->withoutLoading(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return AnalogVendor::query();

    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('name')
            ->add('published');

    }

    public function columns(): array
    {
        return [
            Column::make('Наименование', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Опубликовано ', 'published')
                ->toggleable(),
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
        $analog_vendor_name = AnalogVendor::where('id', $rowId)->first()?->name;
        $this->delete_id = $rowId;
        $deleted_analog_record =  Analog::where('analog_vendor_id', $this->delete_id)->count();
        if ($deleted_analog_record > 0) {
            $this->confirm('У этого производителя аналогов есть ' . $deleted_analog_record . ' записей в таблице аналогов. Вы действительно хотите удалить всю информацию из базы данных?', [
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет',
            ]);
        }
        else {
            $this->confirm('Вы действительно хотите производителя аналогов ' . $analog_vendor_name . '?', [
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет',
            ]);
        }
    }



    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        DB::transaction(function () {
            // Удаление связанных записей из таблицы Analog
            Analog::where('analog_vendor_id', $this->delete_id)->delete();

            // Удаление основной записи
            AnalogVendor::findOrFail($this->delete_id)->delete();
        });
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }
    public function actions(AnalogVendor $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.analog-vendor.show', ['analog_vendor' => $row->id]),
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];
    }

    protected function rules()
    {
        return [
            'name.*' => [
                'required',
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название производителя',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название производителя должно быть заполнено',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $updated = AnalogVendor::query()->find($id)->update([
            $field => $value,
        ]);
        $this->resetValidation(); // Сброс всех результатов валидации


    }

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        AnalogVendor::query()->find($id)->update([
            $field => e($value),
        ]);
        $this->skipRender();
    }
}



