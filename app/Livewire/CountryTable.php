<?php

namespace App\Livewire;

use App\Models\Country;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class CountryTable extends PowerGridComponent
{
    use LivewireAlert;
    public $delete_id;
    public string $tableName = 'country-table';
    public array $name;
    public array $name_in_english;
    public bool $showErrorBag = true;
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
        return Country::query()
        ->with(['media' => function ($query) {
            $query->where('collection_name', 'countryFlag'); // Укажите название коллекции медиа
        }])
        ->withCount('products')
        ->withCount('vendors');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        $powerGridFields = PowerGrid::fields()
            ->add('name')
            ->add('name_in_english')
            ->add('flag', function ($country) { 
                if ($country->media->isNotEmpty()) {
                    $firstMedia = $country->media->first();
                    return '<img src="' . $firstMedia->getUrl() . '" alt="Flag" style="max-width:50px">';
                }
                return '';
            })
            ->add('vendors_count')
            ->add('products_count');

            return $powerGridFields;
    }

    
    

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Название страны', 'name')
                ->searchable()
                ->editOnClick(),
            Column::make('Название на английском', 'name_in_english')
                ->searchable()
                ->editOnClick(),
            Column::make('Флаг страны', 'flag'),
            Column::make('Количество производителей', 'vendors_count'),
            Column::make('Количество товаров', 'products_count'),
            Column::action('Действия'),
        ];
    }
    

    public function filters(): array
    {
        return [
        ];
    }


    #[\Livewire\Attributes\On('country_delete')]
    public function country_delete($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить эту страну?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {

        $deleted_record = Country::where('id', $this->delete_id)->withCount('vendors')->withCount('products')->firstOrFail();

        if ($deleted_record->vendors_count > 0) {
            $this->dispatch('toast', message: 'У этой страны есть производители. Вначале удалите их!', notify: 'error');
            return;
        }
        if ($deleted_record->products_count > 0) {
            $this->dispatch('toast', message: 'У этой страны есть товары. Вначале удалите их!', notify: 'error');
            return;
        }

        $deleted_record->delete();
        $this->dispatch('toast', message: 'Страна ' . $deleted_record->name . ' удалена.', notify: 'success');
    }

    

    #[\Livewire\Attributes\On('update-country-table')]
    public function updateCountryTable(): void
    {
        $this->dispatch('toast', message: 'Новая страна добавлена!', notify: 'success');
        $this->refresh();
        $this->render();
    }

    public function actions(Country $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.country.edit', ['country' => $row->id]),
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('country_delete', ['rowId' => $row->id]),
        ];
    }
    
    protected function rules()
    {
        return [
            'name.*' => ['required'],
            'name_in_english.*' => ['required']
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название страны',
            'name_in_english.*' => 'Название на английском'
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название страны должно быть заполнено',
            'name_in_english.*.required'     => 'Название страны на английском должно быть заполнено'
        ];
    }
    
    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $model = Country::findOrFail($id);

        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $model->updateOrFail([$field => $value]);
    }
}
