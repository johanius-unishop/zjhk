<?php

namespace App\Livewire;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Log;

final class VendorTable extends PowerGridComponent
{
    use LivewireAlert;

    public string $tableName = 'vendor-table';
    public int|null $delete_id = null;
    public array $name;
    public array $short_name;
    public array $country;
    public array $delivery_time;
    public array $warranty;
    public array $published;
    public array $homepage_visible;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';
   // public ?string $primaryKeyAlias = 'slug';

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
        return Vendor::query()
            ->withCount('products')
            ->with('country');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('short_name')
            ->add('published')
            ->add('homepage_visible')
            ->add('country.name')
            ->add('delivery_time')
            ->add('warranty')
            ->add('products_count');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Название производителя', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(),

            Column::make('Краткое название', 'short_name')
                ->sortable()
                ->searchable()
                ->editOnClick(),

            Column::make('Показывать на сайте', 'published')
                ->sortable()
                ->searchable()
                ->toggleable(),

            Column::make('Показывать на главной', 'homepage_visible')
                ->sortable()
                ->searchable()
                ->toggleable(),

            Column::make('Страна происхождения', 'country.name'),
            Column::make('Срок поставки', 'delivery_time')
                ->editOnClick(),

            Column::make('Срок гарантии', 'warranty')
                ->editOnClick(),

            Column::make('Количество товаров', 'products_count'),
            Column::action('Действия')
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
            'short_name.*' => 'Краткое название производителя',
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



    public function filters(): array
    {
        return [];
    }

    public function actions(Vendor $row): array
    {
        $buttons = [];
        $vendor = Vendor::find($row->id);

        // Получаем текущий минимальный порядок сортировки
        $minOrder = Vendor::min('order_column');
        // Получаем текущий максимальный порядок сортировки
        $maxOrder = Vendor::max('order_column');
        // Текущий порядок текущего документа
        $currentOrder = $vendor->order_column;

        $buttons[] = Button::add('Edit')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.vendor.edit', ['vendor' => $row->id]);

        // Проверяем, находится ли вендор на вершине
        if ($currentOrder <= $minOrder) {
            // Если вендор уже наверху, делаем кнопку неактивной
            $buttons[] = Button::add('up_vendor')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success disabled') // Добавляем класс disabled, чтобы кнопка выглядела неактивной
                ->attributes(['disabled' => 'disabled']); // Добавляем атрибут disabled, чтобы кнопка была интерактивно неактивной
        } else {
            // Если вендор не наверху, оставляем кнопку активной
            $buttons[] = Button::add('up_vendor')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_vendor', ['rowId' => $row->id]);
        }

        // Проверяем, находится ли вендор в самом низу
        if ($currentOrder >= $maxOrder) {
            // Если вендор уже внизу, делаем кнопку неактивной
            $buttons[] = Button::add('down_vendor')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success disabled') // Добавляем класс disabled, чтобы кнопка выглядела неактивной
                ->attributes(['disabled' => 'disabled']); // Добавляем атрибут disabled, чтобы кнопка была интерактивно неактивной
        } else {
            // Если вендор не внизу, оставляем кнопку активной
            $buttons[] = Button::add('down_vendor')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_vendor', ['rowId' => $row->id]);
        }

        $buttons[] = Button::add('delete')
            ->slot('<i class="fas fa-trash"></i>')
            ->class('btn btn-danger')
            ->confirm('Вы действительно хотите удалить этот документ?')
            ->dispatch('vendor_delete', ['id' => $row->id]);

        return $buttons;
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
    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Vendor::query()->find($id)->update([
            $field => e($value),
        ]);
        $this->skipRender();
    }

    #[\Livewire\Attributes\On(event: 'down_vendor')]
    public function down_vendor($rowId): void
    {
        try {
            $vendor = Vendor::findOrFail($rowId);
            $down = $vendor->down();
            if ($down) {
                $this->dispatch('toast-success', message: 'Бренд перемещен вниз.', notify: 'success');
            } else {
                $this->dispatch('toast-warning', message: 'Бренд не перемещен.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($vendor->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast-danger', message: ' Не удалось переместить бренд вниз.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

    #[\Livewire\Attributes\On(event: 'up_vendor')]
    public function up_vendor($rowId): void
    {
        try {
            $vendor = Vendor::findOrFail($rowId);
            $up = $vendor->up();
            if ($up) {
                $this->dispatch('toast-success', message: 'Бренд перемещен вверх.', notify: 'success');
            } else {
                $this->dispatch('toast-warning', message: 'Бренд не перемещен.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($vendor->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast-danger', message: ' Не удалось переместить документ вверх.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }
}
