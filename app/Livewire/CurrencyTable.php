<?php
// Рабочая таблица
namespace App\Livewire;

use App\Models\Currency;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class CurrencyTable extends PowerGridComponent
{
    use LivewireAlert;
    public int|null $delete_id = null;

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
        return Currency::query();
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
            ->add('auto_multiplier');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Валюта', 'name')
                ->sortable()
                ->editOnClick(hasPermission: true, saveOnMouseOut: true)
                ->searchable(),
            Column::make('Код', 'charcode')
                ->sortable()
                ->editOnClick(hasPermission: true, saveOnMouseOut: true)
                ->searchable(),

            Column::make('Курс ЦБ', 'cb_rate'),

            Column::make('Внутренний курс', 'internal_rate')
                ->editOnClick(hasPermission: true, saveOnMouseOut: true),

            Column::make('Автоматический расчет', 'auto_calc_cbrf')
                ->toggleable(),

            Column::make('Множитель', 'auto_multiplier')
                ->sortable()
                ->editOnClick(hasPermission: true, saveOnMouseOut: true)
                ->searchable(),


            Column::action('Действия')
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

    public function filters(): array
    {
        return [];
    }


    public function actions(Currency $row): array
    {
        return [
            Button::add('delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->confirm('Вы действительно хотите удалить эту валюту?')
                ->dispatch('currency_delete', ['id' => $row->id]),
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

        Currency::query()->find($id)->update([
            $field => e($value),
        ]);
    }


    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Currency::query()->find($id)->update([
            $field => e($value),
        ]);
        $this->skipRender();
    }

    public function relationSearch(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('currency_delete')]
    public function currency_delete(int $id): void
    {
        $record = Currency::findOrFail($id);
        $record->delete();

        $this->dispatch('toast-success', message: 'Валюта успешно удалена!');
    }


}
