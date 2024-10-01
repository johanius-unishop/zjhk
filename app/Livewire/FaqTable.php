<?php

namespace App\Livewire;

use App\Models\Faq;
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
use Illuminate\Support\Facades\Log;
final class FaqTable extends PowerGridComponent
{
    use LivewireAlert;
    public $delete_id;
    public function setUp(): array
    {

        return [

            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Faq::query()->orderBy('order_column');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('question')
            ->add('published', closure: fn($item) => $item->published ? '✅' : '❌')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Вопрос', 'question')
                ->sortable()
                ->searchable(),
            Column::make('Опубликовано', 'published')
                ->sortable(),
            Column::make('Создано', 'created_at')
                ->sortable(),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::boolean('published')
            ->label('✅', '❌'),
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
        $deleted_record = Faq::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }



    #[\Livewire\Attributes\On('up')]
    public function property_up($rowId): void
    {
        try {
            $property = Faq::findOrFail($rowId);
            $property->moveOrderUp();
            $this->dispatch('toast', message: 'Запись успешно поднята вверх.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info('Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось поднять  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }


    #[\Livewire\Attributes\On(event: 'down')]
    public function property_down($rowId): void
    {
        try {
            $property = Faq::findOrFail($rowId);
            $property->moveOrderDown();
            $this->dispatch('toast', message: 'Запись успешно опущена вниз.', notify: 'success');
        }
        catch (\Throwable $th) {
            Log::info($property->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось опустить  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');

    }

    public function actions(Faq $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.faq.edit', ['faq' => $row->id]),
            Button::add('up')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up', ['rowId' => $row->id]),
            Button::add('down')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down', ['rowId' => $row->id]),
            Button::add('delivery')
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
