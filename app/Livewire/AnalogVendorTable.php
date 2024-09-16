<?php

namespace App\Livewire;

use App\Models\AnalogVendor;
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
final class AnalogVendorTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public $delete_id;
    public ?string $primaryKeyAlias = 'slug';
    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput()->withoutLoading(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return AnalogVendor::query();
        // return Category::query()->where('root_id', null)->withCount('childrens');

    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name');

        // ->add('name', function ($item) {
        //     return $item->name . ' (' . $item->product_count . ')';
        // });
        // ->add('country')
        // ->add('delivery_time')

        // ->add('warranty');
    }

    public function columns(): array
    {
        // ->searchable()
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')->sortable(),


            // Column::make('Страна', 'country')->sortable(),
            // Column::make('Время доставки', 'delivery_time')->sortable(),
            // Column::make('Гарантия', 'warranty')->sortable(),
            Column::make('Создано', 'created_at')
                ->sortable(),
            Column::action('Действия'),
        ];
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

        $deleted_record = AnalogVendor::where('id', $this->delete_id)->withCount('product')->firstOrFail();
        if ($deleted_record->product_count > 0) {
            $this->dispatch('toast', message: 'У этого производителя есть аналоги товаров. Вначале удалите их!', notify: 'error');
            return;
        }

        // if ($deleted_record->seo()->exists()) {
        //     $deleted_record->seo()->delete();
        // }
        // if ($deleted_record->media()->exists()) {
        //     $deleted_record->media()->delete();
        // }
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }
    public function actions(AnalogVendor $row): array
    {
        return [

            // Button::add('view')
            //     ->slot('<i class="fas fa-folder"></i>')
            //     ->class('btn btn-primary')
            //     ->route('admin.category.show', ['category' => $row->id]),
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.analog-vendor.edit', ['analog_vendor' => $row->id]),
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];
    }
}
