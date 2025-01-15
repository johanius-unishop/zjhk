<?php

namespace App\Livewire;


use App\Models\Category;
use App\Models\Product;
use App\Models\Vendor;

use App\Models\ProductType;


use Livewire\Attributes\On;
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
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class ProductTable extends PowerGridComponent
{
    use LivewireAlert;
    public string $sortField = 'products.id';
    public $deleteId;
    public string $productTypeId;
    public bool $deferLoading = true;
    public bool $showFilters = true;
    
    public array $name;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            Header::make()
                ->showSearchInput()
                ->withoutLoading(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Product::query();
    }

    public function relationSearch(): array
    {
        return [
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('article')
            ->add('vendor.name');
    }
    public function columns(): array
    {
        return [
            Column::make('ID', 'id'),
            Column::make('Модель', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Артикул', 'article')
                ->sortable()
                ->searchable(),
            Column::make('Производитель', 'vendor.name')
                ->sortable(),
            Column::make('Опубликовано', 'published')
                ->toggleable(),
            Column::make('Составной товар', 'composite_product')
                ->toggleable(),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::boolean('published')
                ->label('✅', '❌'),
            Filter::boolean('composite_product')
                ->label('✅', '❌'),            // Filter::boolean('is_moderated')
            // ->label('✅', '❌'),
            Filter::select('vendor.name', 'vendor.id')
                ->dataSource(Vendor::all())
                ->optionLabel('name')
                ->optionValue('id'),
        ];
    }

    #[\Livewire\Attributes\On('post_delete')]
    public function post_delete($rowId): void
    {
        $this->deleteId = $rowId;
        $this->confirm('Вы действительно хотите удалить эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        // TODO проверка на наличие товара в заказе
        // dd(auth()->user()->can('delete content'));
        if (!auth()->user()->can('delete content')) {
            $this->dispatch('toast', message: 'У ввас нет права удалять товар!', notify: 'error');
            return;
        }
        $item = Product::where('id', $this->deleteId)->first();

        // if ($item) {
        //     $this->dispatch('toast', message: 'Этот товар использован в заказе. Вначале удалите их!', notify: 'error');
        //     return;
        // }


        // $item = Product::where('id', $this->deleteId)->with('variant')->first();


        // $item->variant()->each(function ($variant) {
        //     $variant->delete();
        // });


        if ($item->seo()->exists()) {
            $item->seo()->delete();
        }
        if (@$item->media()->exists()) {
            $item->media()->delete();
        }

        $item->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }

    public function actions(Product $row): array
    {

        if (!auth()->user()->can('delete content')) {
            return [
                Button::add('view')
                    ->slot('<i class="fas fa-edit"></i>')
                    ->class('btn btn-primary')
                    ->route('admin.product.edit', ['product' => $row->id])
                    ->target('_blank'),
            ];
        }

        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.product.edit', ['product' => $row->id])
                ->target('_blank'),
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
            'name.*'       => 'Модель товара',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Модель товара должна быть заполнена',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();
    
        $updated = Product::query()->find($id)->update([
            $field => $value,
        ]);
    }
}
