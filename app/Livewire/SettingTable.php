<?php

namespace App\Livewire;

use App\Models\Setting;
use Illuminate\Support\Carbon;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Number;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Rule;
final class SettingTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public $setting_id;

    public string $tableName = 'setting-table';
    public array $group;
    public array $key;
    public array $value;
    public array $description;

    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            Header::make()->showSearchInput()->withoutLoading(),
            Footer::make()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Setting::query();

    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        $powerGridFields = PowerGrid::fields()
            ->add('id')
            ->add('group')
            ->add('key')
            ->add('value');

        return $powerGridFields;
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Группа', 'group')
                ->searchable()
                ->editOnClick(),
            Column::make('Настройка', 'key')
                ->searchable()
                ->editOnClick(),
            Column::make('Значение', 'value')
                ->searchable()
                ->editOnClick(),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }


    #[\Livewire\Attributes\On('setting_delete')]
    public function setting_delete(int $rowId): void
    {
        $this->setting_id = $rowId;
        $this->confirm(
            'Вы действительно хотите удалить эту настройку?',
            [
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет'
            ]
        );
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed(): void
    {
        $deleted_record = Setting::findOrFail($this->setting_id);
        $deleted_record->delete();
        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    public function actions(Setting $row): array
    {
        return [
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('setting_delete', ['rowId' => $row->id])
        ];
    }

   
    protected function rules()
    {
        return [
            'group.*' => [
                'required',
            ],

            'key.*' => [
                'required',
            ],

            'value.*' => [
                'required',
            ],
             
        ];
    }

    protected function validationAttributes()
    {
        return [
            'group.*'   => 'Группа',
            'key.*'     => 'Настройка',
            'value.*'   => 'Значение',
            'auto_multiplier.*' => 'Множитель',
            'internal_rate.*' => 'Внутренний курс',
        ];
    }

    protected function messages()
    {
        return [
            'group.*.required'     => 'Поле "Группа" обязательно должно быть заполнено',
            'key.*.required'     => 'Поле "Настройка" обязательно должно быть заполнено',
            'value.*.required'     => 'Поле "Значение" обязательно должно быть заполнено',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();
    
        $updated = Setting::query()->find($id)->update([
            $field => $value,
        ]);
    }
    
}
