<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Currency;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class CurrencyTable extends PowerGridComponent
{
    public $delete_id;

    public string $tableName = 'currency-table';
    public array $name;
    public array $charcode;
    public array $internal_rate;
    public array $auto_calc_cbrf;
    public array $auto_multiplier;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Currency::query();
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
            ->add('charcode')
            ->add('cb_rate')
            ->add('internal_rate')
            ->add('auto_calc_cbrf')
            ->add('auto_multiplier')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Валюта', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(hasPermission: true),
            Column::make('Код', 'charcode')
                ->sortable()
                ->searchable(),

            Column::make('Курс ЦБ', 'cb_rate'),

            Column::make('Внутренний курс', 'internal_rate'),

            Column::make('Автоматический расчет', 'auto_calc_cbrf')
                ->sortable()
                ->searchable()
                ->toggleable(),

            Column::make('Множитель', 'auto_multiplier')
                ->sortable()
                ->searchable(),


            Column::action('Действия')
        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function actions(Currency $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: ' . $row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id])
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
    protected function rules()
    {
        return [
            'name.*' => [
                'required',
            ],

            'charcode.*' => [
                'required',
            ],

            'auto_multiplier.*' => [
                'numeric',
                'min:0.5',
                'max:1.5',
            ],

            'internal_rate.*' => [
                'numeric',
                'min:0.01',
            ],

        ];
    }
    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название валюты',
            'charcode.*' => 'Символьный код',
            'auto_calc_cbrf.*' => 'Авторасчет внутреннего курса',
            'auto_multiplier.*' => 'Множитель',
            'internal_rate.*' => 'Внутренний курс',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название обязательно должно быть заполнено',
            'name.*.unique'     => 'Название должно быть уникальным',
            'charcode.*.unique' => 'Валюта с таким символьным кодом уже есть в списке.',
            'auto_multiplier.*.numeric' => 'Множитель должен быть числом, разделитель дробной части "."',
            'auto_multiplier.*.max' => 'Множитель должен быть меньше или равен 1.5',
            'auto_multiplier.*.min' => 'Множитель должен быть больше или равен 0.5',
            'internal_rate.*.numeric' => 'Внутренний курс должен быть числом, разделитель дробной части "."',
            'internal_rate.*.min' => 'Внутренний курс должен быть больше или равен 0.01',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        if (in_array($field, ['internal_rate', 'auto_multiplier'])) {
            $value = round(str_replace(',', '.', trim($value)), 2);
        }

        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $updated = Currency::query()->find($id)->update([
            $field => $value,
        ]);
    }

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Currency::query()->find($id)->update([
            $field => e($value),
        ]);
        $this->skipRender();
    }
}
