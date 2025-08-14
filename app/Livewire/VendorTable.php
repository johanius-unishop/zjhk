<?php

namespace App\Livewire;

use App\Models\Vendor;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class VendorTable extends PowerGridComponent
{
    use LivewireAlert;
    public $delete_id;
    public string $tableName = 'vendor-table';
    public array $name;
    public array $short_name;
    public array $country;
    public array $delivery_time;
    public array $warranty;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';
    public ?string $primaryKeyAlias = 'slug';

    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput()->withoutLoading(),
            PowerGrid::footer()->showPerPage()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Vendor::query()->withCount('products')->with('country');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('name')
            ->add('short_name')
            ->add('country.name')
            ->add('delivery_time')
            ->add('warranty')
            ->add('products_count');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Производитель', 'name')
                ->searchable()
                ->editOnClick(),
            Column::make('Краткое название', 'short_name')
                ->searchable()
                ->editOnClick(),
            Column::make('Страна производителя', 'country.name'),
            Column::make('Срок поставки', 'delivery_time')
                ->editOnClick(),
            Column::make('Гарантийный срок', 'warranty')
                ->editOnClick(),
            Column::make('Количество товаров', 'products_count'),
            Column::action('Действия'),
        ];
    }


    public function filters(): array
    {
        return [];
    }


    #[\Livewire\Attributes\On('vendor_delete')]
    public function vendor_delete($rowId): void
    {
        $this->delete_id = $rowId;
        $this->confirm(
            'Вы действительно хотите удалить этого производителя?',
            [
                'onConfirmed' => 'confirmed',
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет',
                'confirmButtonText' => 'Да'
            ]
        );
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {

        $deleted_record = Vendor::where('id', $this->delete_id)->withCount('products')->firstOrFail();
        if ($deleted_record->product_count > 0) {
            $this->dispatch('toast', message: 'У этого производителя есть товары. Сначала следует удалить их!', notify: 'error');
            return;
        }

        if ($deleted_record->seo()->exists()) {
            $deleted_record->seo()->delete();
        }
        if ($deleted_record->media()->exists()) {
            $deleted_record->media()->delete();
        }
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }

    public function actions(Vendor $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.vendor.edit', ['vendor' => $row->id]),
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('vendor_delete', ['rowId' => $row->id]),
        ];
    }

    protected function rules()
    {
        return [
            'name.*' => ['required'],
            'country.*' => ['required'],
            'delivery_time.*' => ['required'],
            'warranty.*' => ['required'],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название производителя',
            'country.*' => 'Страна производителя',
            'delivery_time.*' => 'Срок поставки',
            'warranty.*' => 'Срок гарантии',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название производителя должно быть заполнено',
            'country.*.required' => 'Страна производителя должна быть заполнена',
            'delivery_time.*.required' => 'Срок поставки должен быть заполнен',
            'warranty.*.required' => 'Гарантийный срок должен быть заполнен',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $model = is_string($id) ? Vendor::where('slug', $id)->firstOrFail() : Vendor::findOrFail($id);

        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $model->updateOrFail([$field => $value]);
    }
}
