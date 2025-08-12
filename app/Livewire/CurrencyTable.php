<?php

namespace App\Livewire;

use App\Models\Currency;
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

final class CurrencyTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
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

    // public bool $deferLoading = true;
    /* public function setUp(): array
    {
        return [
            Header::make()->showSearchInput()->withoutLoading(),
            Footer::make()->showPerPage()->showRecordCount(),
        ];
    } */
    public function header(): array
    {
        return [
           /* Button::add('search')
                ->slot('<i class="fa fa-search"></i> Поиск') // иконка и подпись кнопки поиска
                ->class('btn btn-outline-secondary')
                ->command('search'), // Команда поиска*/
        ];
    }

    public function footer(): array
    {
        return [
            Filter::perPage(),          // Выбор количества записей на странице
            Filter::recordCount(),      // Показ числа записей
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

    /*public function fields(): PowerGridFields
    {
        $powerGridFields = PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('charcode')
            ->add('numcode')
            ->add('internal_rate')
            ->add('cb_rate')
            ->add('auto_calc_cbrf')
            ->add('auto_multiplier');

        return $powerGridFields;
    }*/

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Наименование', 'name')
                ->searchable()
                ->editOnClick(),
            Column::make('Символ', 'charcode')
                ->searchable()
                ->editOnClick(),
            Column::make('Внутренний курс', 'internal_rate')
                ->editOnClick(),
            Column::make('Курс ЦБ', 'cb_rate'),
            Column::make('Множитель', 'auto_multiplier')
                ->editOnClick(),
            Column::make('Авторасчет внутреннего курса', 'auto_calc_cbrf')
                ->toggleable(),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [];
    }


    #[\Livewire\Attributes\On('post_delete')]
    public function post_delete(int $rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm(
            'Вы действительно хотите удалить эту запись?',
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
        $deleted_record = Currency::findOrFail($this->delete_id);
        $deleted_record->delete();
        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
    }

    public function actions(Currency $row): array
    {
        return [
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id])
        ];
    }


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
