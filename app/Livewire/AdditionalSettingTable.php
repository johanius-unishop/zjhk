<?php

namespace App\Livewire;

use App\Models\AdditionalSetting;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Column;

final class AdditionalSettingTable extends PowerGridComponent
{
    use LivewireAlert;
    public $additional_setting_id;

    public string $tableName = 'additional-setting-table';
    public array $group;
    public array $name;
    public array $value;
    public array $description;

    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput()->withoutLoading(),
            PowerGrid::footer()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return AdditionalSetting::query();

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
            ->add('name')
            ->add('value')
            ->add('description');

        return $powerGridFields;
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Группа', 'group')
                ->searchable()
                ->editOnClick(),
            Column::make('Настройка', 'name')
                ->searchable()
                ->editOnClick(),
            Column::make('Значение', 'value')
                ->searchable()
                ->editOnClick(),
            Column::make('Описание', 'description')
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


    #[\Livewire\Attributes\On('additional_setting_delete')]
    public function additional_setting_delete(int $rowId): void
    {
        $this->additional_setting_id = $rowId;
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
        $deleted_record = AdditionalSetting::findOrFail($this->additional_setting_id);
        $deleted_record->delete();
        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    public function actions(AdditionalSetting $row): array
    {
        return [
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('additional_setting_delete', ['rowId' => $row->id])
        ];
    }


    protected function rules()
    {
        return [
            'group.*' => [
                'required',
            ],

            'name.*' => [
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
            'name.*'     => 'Настройка',
            'value.*'   => 'Значение',
        ];
    }

    protected function messages()
    {
        return [
            'group.*.required'     => 'Поле "Группа" обязательно должно быть заполнено',
            'name.*.required'     => 'Поле "Настройка" обязательно должно быть заполнено',
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

        $updated = AdditionalSetting::query()->find($id)->update([
            $field => $value,
        ]);
    }

}
