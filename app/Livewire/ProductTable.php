<?php

namespace App\Livewire;

use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductStyle;
use App\Models\ProductSubtype;
use App\Models\ProductType;
use App\Models\Vendor;

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
    use WithExport;
    use LivewireAlert;

    public string $sortField = 'products.id';
    public $delete_id;
    public string $productTypeId;
    public bool $deferLoading = true;
    public bool $showFilters = true;
    public function boot(): void
    {
        //   config(['livewire-powergrid.filter' => 'outside']);
    }
    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }
    // public function header(): array
    // {

    // return [
    //     Button::add('bulk-delete')
    //         ->slot('Bulk Delete')
    //         ->dispatch('bulkDelete.ProductTable'  , []),
    // ];
    // return [
    //     Button::add('bulk-delete')
    //         ->slot('Сделать неактивными')
    //         ->class('btn btn-danger')
    //         ->dispatch('bulkDelete', []),
    // ];
    //   ->slot('Bulk delete (<span x-text="window.pgBulkActions.count(\'' . $this->tableName . '\')"></span>)')

    // return [
    //     Button::add('bulk-delete')
    //         ->slot('Сделать неактивными')
    //         ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
    //         ->dispatch('bulkDelete.' . $this->tableName, []),
    // ];
    // }


    // #[On('bulkDelete.{tableName}')]
    // public function bulkDelete(): void
    // {
    //     // $this->js('alert(window.pgBulkActions.get(\'' . $this->tableName . '\'))');

    //     $this->js('alert(  111)');
    // // }
    // #[On('bulkDelete.ProductTable')]
    // public function bulkDelete(): void
    // {
    //     // $this->js('alert(window.pgBulkActions.get(\'' . $this->tableName . '\'))');
    //     if($this->checkboxValues){
    //         // YouModel::destroy($this->checkboxValues);
    //         $this->js('window.pgBulkActions.clearAll()'); // clear the count on the interface.
    //     }
    // }
    // public function editDish(array $data): void
    // {
    //     dd('You are editing', $data);
    // }

    // #[\Livewire\Attributes\On('bulkDelete')]
    // public function bulkDelete(): void
    // {
    //     $this->js('alert("Bulk delete")');
    // }
    public function datasource(): Builder
    {
        return Product::query()->with('vendor', 'media', 'vendor.price_segment', 'product_style', 'product_type', 'product_subtype');
    }
    // 'price_segment',
    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('active', fn($item) => $item->active ? '✅' : '❌')
            // ->add('is_moderated', fn($item) => $item->is_moderated ? '✅' : '❌')
            // ->add('link')
            // ->add('vendor_name', fn($dish) => e(@$dish->vendor->name))
            // ->add('price_segment_name', fn($dish) => e(@$dish->vendor->price_segment->name))
            // ->add('product_style_name', fn($dish) => e(@$dish->product_style->name))
            // ->add('product_type_name', fn($dish) => e(@$dish->product_type->name))
            // ->add('product_subtype_name', fn($dish) => e(@$dish->product_subtype->name))
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::add()
                ->title('ID')
                ->field('id', 'products.id')
                ->searchable()
                ->sortable(),
            Column::make('Наименование', 'name')
                ->sortable()
                ->searchable()
                ->bodyAttribute('any-class', 'min-width: 600px; max-width: 600px ;white-space:normal;'),

            Column::make('Активно', 'active')
                ->sortable()
                ->searchable()->bodyAttribute('text-center'),
            // Column::make('Одобрено', 'is_moderated')
            //     ->sortable()
            //     ->searchable()->bodyAttribute('text-center'),
            // Column::make('Old code', 'old_code')
            //     ->sortable()
            //     ->searchable(),
            // Column::make('Old link', 'old_link')
            //     ->sortable()
            //     ->searchable(),
            // Column::make('Фабрика', 'vendor_name'),
            // Column::make('Ценовой сегмент', 'price_segment_name'),
            // Column::make('Стиль', 'product_style_name'),
            // Column::make('Предмет', 'product_type_name'),
            // Column::make('Расположение', 'product_subtype_name'),
            // Column::make('Created at', 'created_at')
            //     ->sortable(),



            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::boolean('active')
                ->label('✅', '❌'),
            // Filter::boolean('is_moderated')
                // ->label('✅', '❌'),
            // Filter::select('vendor_name', 'vendor_id')
            //     ->dataSource(Vendor::all())
            //     ->optionLabel('name')
            //     ->optionValue('id'),
            // Filter::select('product_style_name', 'product_style_id')
            //     ->dataSource(ProductStyle::all())
            //     ->optionLabel('name')
            //     ->optionValue('id'),
            // Filter::select('product_type_name', 'product_type_id')
            //     ->dataSource(ProductType::all())
            //     ->optionLabel('name')
            //     ->optionValue('id'),
            // Filter::select('product_subtype_name', 'product_subtype_id')
            //     ->dataSource(ProductSubtype::all())
            //     ->optionLabel('name')
            //     ->optionValue('id'),
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

        // dd(auth()->user()->can('delete content'));
        if (!auth()->user()->can('delete content')) {
            $this->dispatch('toast', message: 'У ввас нет права удалять товар!', notify: 'error');
            return;
        }
        // $item = OrderItem::where('product_id', $this->delete_id)->first();

        // if ($item) {
        //     $this->dispatch('toast', message: 'Этот товар использован в заказе. Вначале удалите их!', notify: 'error');
        //     return;
        // }


        // $item = Product::where('id', $this->delete_id)->with('variant')->first();


        // $item->variant()->each(function ($variant) {
        //     $variant->delete();
        // });


        // if ($item->seo()->exists()) {
        //     $item->seo()->delete();
        // }
        // if ($item->media()->exists()) {
        //     $item->media()->delete();
        // }

        // $item->delete();


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
