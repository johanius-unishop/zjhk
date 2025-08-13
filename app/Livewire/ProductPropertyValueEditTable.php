<?php

namespace App\Livewire;


use App\Models\ProductTypeProperty;
use App\Models\ProductPropertyValue;
use App\Models\Product;
use App\Models\Vendor;

use App\Models\ProductType;


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
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class ProductPropertyValueEditTable extends PowerGridComponent
{
    use LivewireAlert;
    public $deleteId;
    public string $productTypeId;
    public bool $deferLoading = true;
    public bool $showFilters = true;
    public $product_id;

    public function setUp(): array
    {
        return [
            PowerGrid::header()
                ->showSearchInput()
                ->withoutLoading(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

  /*  public function datasource(): Builder
    {
        $product_type_id = Product::query()
            ->where('id', '=', $this->product_id)
            ->value('product_type_id');

        return ProductTypeProperty::query()
            ->where('product_type_id', '=', $product_type_id)
            ->orderBy('order_column');
    }*/

    public function datasource(): Builder
    {
        $productId = $this->product_id;
        $productTypeId = Product::query()->where('id', '=', $productId)->first()->product_type_id;

        $data = ProductTypeProperty::query()
            ->leftJoin('product_property_values', function($join) use ($productId) {
                $join->on('product_type_properties.id', '=', 'product_property_values.product_type_property_id')
                    ->where('product_property_values.product_id', '=', $productId);
            })
            ->leftJoin('product_type_property_values', 'product_property_values.product_type_property_value_id', '=', 'product_type_property_values.id')
            ->where('product_type_properties.product_type_id', '=', $productTypeId)
            ->orderBy('product_type_properties.order_column')
            ->select([
                'product_type_properties.name as characteristic_name',
                'product_type_property_values.value as characteristic_value',
            ]);
            return $data;
    }


    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {

        return PowerGrid::fields()
            ->add('name')
            ->add('value_id');

    }
    public function columns(): array
    {
        return [
            Column::make('Характеристика', 'name'),
            Column::make('Значение', 'value_id'),
            ];
    }

    public function filters(): array
    {
        return [

        ];
    }
}
