<?php

namespace App\Livewire;



use App\Models\Order;
use App\Models\OrderComposition;

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

final class OrderTable extends PowerGridComponent
{
    use LivewireAlert;
    
    public $deleteId;
    public array $name;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [
            Header::make()
                ->withoutLoading(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Order::query()
            ->orderByDesc('order_number');
    }

    public function relationSearch(): array
    {
        return [
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('order_number')
            ->add('order_date')
            ->add('received');
    }
    public function columns(): array
    {
        return [
            Column::make('Номер заказ поставщику', 'order_number'),
            Column::make('Дата заказа поставщику', 'order_date'),
            Column::make('Заказ получен', 'received')
                ->toggleable(),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
            
        ];
    }

    #[\Livewire\Attributes\On('update-order-table')]
    public function updateOrderTable(): void
    {
        $this->dispatch('toast', message: 'Заказ поставщику загружен!', notify: 'success');
        $this->refresh();
        $this->render();
    }

    #[\Livewire\Attributes\On('post_delete')]
    public function post_delete($rowId): void
    {
        $this->deleteId = $rowId;
        $this->confirm('Вы действительно хотите удалить заказ поставщику?', [
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
            $this->dispatch('toast', message: 'У вас нет права удалять заказ!', notify: 'error');
            return;
        }
        // Удаление всех записей из OrderComposition, относящихся к данному заказу
        OrderComposition::where('order_id', $this->deleteId)->delete();

        // Поиск и удаление самого заказа
        $item = Order::findOrFail($this->deleteId);
        $item->delete();

        // Отправка уведомления об успешном удалении
        $this->dispatch('toast', ['message' => 'Заказ удален.', 'notify' => 'success']);
    }

    public function actions(Order $row): array
    {

        return [
            Button::add('view')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.order.show', ['order' => $row->id]),
            Button::add('Delete')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];


    }

    protected function rules()
    {
        return [
            'order_number.*' => [
                'required',
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'order_number.*'       => 'Номер заказа поставщику',
        ];
    }

    protected function messages()
    {
        return [
            'order_number.*.required'     => 'Номер заказа должен быть заполнен',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();
    
        $updated = Order::query()->find($id)->update([
            $field => $value,
        ]);
    }

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Order::query()->find($id)->update([
            $field => e($value),
        ]);

        $this->skipRender();
    }
    
}
