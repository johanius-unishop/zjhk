<?php

namespace App\Livewire;

use App\Models\Currency;
use Illuminate\Support\Carbon;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Rules\MultiplierBetween0_5and1_5;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Number;
 
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\Column;

final class CurrencyTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public string $tableName = 'currency-table';
    public array $name;
    public array $charcode;
    public array $internal_rate;
    public array $cb_rate;
    public array $auto_calc_cbrf;
    public array $auto_multiplier;
    public bool $showErrorBag = true;
    public $delete_id;

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

    public function datasource(): Builder
    {
        return Currency::query();
    }

    public function fields(): PowerGridFields
    {
    return PowerGrid::fields()
        ->add('id')
        ->add('name')
        //, function($value) {
            //return '<a href="' . route('admin.currency.edit', ['currency' => $value->id]) . '">' . $value->name . '</a>';
        //})
        ->add('charcode')
        ->add('internal_rate')
        ->add('cb_rate')
        ->add('auto_calc_cbrf')
        ->add('auto_multiplier');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')
                ->editOnClick(true)
                ->searchable(),
            Column::make('Символьный код валюты', 'charcode')
                ->editOnClick(true)
                ->searchable(),
            Column::make('Внутренний курс', 'internal_rate')
                ->editOnClick(true),
            Column::make('Курс ЦБ РФ', 'cb_rate')
                ->editOnClick(true),
            Column::make('Автоматический расчет курса', 'auto_calc_cbrf')
                ->toggleable(),
            Column::make('Множитель', 'auto_multiplier')
                ->editOnClick(true),
            Column::action('Действия'),
        ];
    }

    protected function rules()
    {
        return [
            'name.*|charcode.*' => ['required', 'string'],
            'charcode.*' => ['required', 'string'], // Объединить с 'name' если возможно
            'internal_rate.*|cb_rate.*' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'auto_multiplier.*' => [new MultiplierBetween0_5and1_5],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'flavor.*'       => 'Ice cream flavor',
            'price_in_eur.*' => 'Ice cream price',
        ];
    }
    
    protected function messages()
    {
        return [
            'flavor.*.in'     => 'Valid flavors: :values',
        ];
    }

    public function onUpdatedEditable(string|int $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-'.$field.'-'.$id);
            }
        })->validate();
 
        if ($field === 'price_in_eur') {
            $field = 'price';
 
            $value = (new \NumberFormatter('pt-PT', \NumberFormatter::CURRENCY))
                ->parse(preg_replace('/\s+/', "\u{A0}", $value));
        }
 
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










    public function filters(): array
    {
        return [
        ];
    }


    #[\Livewire\Attributes\On('post_delete')]
    public function post_delete($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // TODO Удаление


        $deleted_record = Currency::where('id', $this->delete_id)-> firstOrFail();
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }
    public function actions(Currency $row): array
    {
        return [

           /* Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->routepublic function relationSearch(): array
    {
        return [];
    }('admin.currency.show', ['currency' => $row->id]),
            Button::add('view')
                ->slot(public function relationSearch(): array
    {
        return [];
    }'<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.currency.edit', ['currency' => $row->id]),*/
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];
    }


    public function relationSearch(): array
    {
        return [];
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
}
