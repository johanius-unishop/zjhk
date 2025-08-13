<?php

namespace App\Livewire;

use App\Models\Page;
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
final class PageTable extends PowerGridComponent
{
    use WithExport;
    use LivewireAlert;
    public $delete_id;
    public function setUp(): array
    {


        return [

            PowerGrid::header()->showSearchInput(),
            PowerGrid::footer()

                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Page::query();
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
            ->add('order_column')
            ->add('active')
            ->add('protected', closure: fn($item) => $item->protected ? '✅' : '❌')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Наименование', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Опубликовано ', 'published')
                ->sortable(),
            Column::make('Защита', 'protected'),
            Column::make('Создано', 'created_at')
                ->sortable(),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [

            Filter::boolean('protected')
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
        $deleted_record = Page::where('id', $this->delete_id)->firstOrFail();

        if ($deleted_record->protected) {
            $this->dispatch('toast', message: 'Данная страница не может быть удалена. Она используется в меню и защищена от удаления!', notify: 'error');
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
    public function actions(Page $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.page.edit', ['page' => $row->id]),
            Button::add('delivery')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('post_delete', ['rowId' => $row->id]),
        ];
    }
}
