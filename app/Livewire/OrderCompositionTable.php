<?php

namespace App\Livewire;



use App\Models\OrderComposition;

use Livewire\Attributes\On;
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
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class OrderCompositionTable extends PowerGridComponent
{
    use LivewireAlert;

    public string $tableName = 'OrderCompositionTable';

    public $deleteId;
    public int $parent_order;
    public array $name;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            PowerGrid::header()
                ->withoutLoading(),
            PowerGrid::footer()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return OrderComposition::query()
        ->join('products', 'order_compositions.product_id', '=', 'products.id')
        ->select(['order_compositions.*', 'products.name as product_name'])
        ->where('order_id', $this->parent_order);
    }

    public function relationSearch(): array
    {
        return [
           // 'product_name' => ['table' => 'products', 'field' => 'name'],
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('product_name')
            ->add('product.article')
            ->add('quantity');
    }

    public function columns(): array
    {
        return [
            Column::make('Модель товара', 'product_name')->sortable(),
            Column::make('Артикул', 'product.article'),
            Column::make('Количество', 'quantity'),

        ];
    }

    public function filters(): array
    {
        return [

        ];
    }
}
