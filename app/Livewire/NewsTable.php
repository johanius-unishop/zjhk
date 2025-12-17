<?php

namespace App\Livewire;

use App\Models\News;
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

final class NewsTable extends PowerGridComponent
{
    use LivewireAlert;
    public string $tableName = 'news-table';
    public $delete_id;

    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return News::query()->latest();
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
            ->add('published')
            ->add('homepage_visible');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Название', 'name')
                ->sortable()
                ->editOnClick(hasPermission: true, saveOnMouseOut: true)
                ->searchable(),
            Column::make('Показывать на сайте', 'published')
                ->sortable()
                ->toggleable(),

            Column::make('Показывать на главной', 'homepage_visible')
                ->sortable()
                ->toggleable(),

            Column::action('Действия'),
        ];
    }

    protected function rules()
    {
        return [
            'name.*' => [
                'required',
                'unique',
            ],

        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название статьи',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название статьи является обязательным полем',
            'name.*.unique'     => 'Название статьи должно быть уникальным',
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
        $deleted_record = News::where('id', $this->delete_id)->firstOrFail();


        if ($deleted_record->seo()->exists()) {
            $deleted_record->seo()->delete();
        }
        if ($deleted_record->media()->exists()) {
            $deleted_record->media()->delete();
        }
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');

    }

    public function actions(News $row): array
    {
        $buttons = [];

        $buttons[] = Button::add('Edit')
            ->slot('<i class="fas fa-edit"></i>')
            ->class('btn btn-primary')
            ->route('admin.news.edit', ['new' => $row->id]);

        $buttons[] = Button::add('delete')
            ->slot('<i class="fas fa-trash"></i>')
            ->class('btn btn-danger')
            ->confirm('Вы действительно хотите удалить эту новость?')
            ->dispatch('new_delete', ['id' => $row->id]);

        return $buttons;
    }
}
