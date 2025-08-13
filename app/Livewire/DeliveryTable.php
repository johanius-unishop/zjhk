<?php

namespace App\Livewire;

use App\Models\DeliveryMethod ;
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
final class DeliveryTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public $delete_id;
    public string $tableName = 'delivery-table';
    public array $name;
    public array $comment;
    public bool $showErrorBag = true;
    public $editingRow = null;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';

    public function setUp(): array
    {
        return [

            PowerGrid::header()->showSearchInput()->withoutLoading(),
            PowerGrid::footer()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return DeliveryMethod::query();

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
            ->add('comment')
            ->add('published');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')
                ->sortable()
                ->searchable()
                ->editOnClick(),
            Column::make('Комментарий', 'comment')
                ->editOnClick(),
            Column::make('Опубликовано', 'published')
                ->toggleable(),
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
        // TODO Удаление

        $deleted_record = DeliveryMethod::where('id', $this->delete_id)-> firstOrFail();
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }
    public function actions(DeliveryMethod $row): array
    {
        return [
            Button::add('delivery')
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

            'comment.*' => [
                'required',
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Способ доставки',
            'comment.*' => 'Комментарий',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Способ доставки должен быть заполнен',
            'comment.*.unique'     => 'Комментарий должен быть заполнен',
            'name.*.unique' => 'Способ доставки должен быть уникальным',
        ];
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $updated = DeliveryMethod::query()->find($id)->update([
            $field => $value,
        ]);
    }

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        DeliveryMethod::query()->find($id)->update([
            $field => e($value),
        ]);
        $this->skipRender();
    }


}
