<?php

namespace App\Livewire;

use App\Models\Article;
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
use PowerComponents\LivewirePowerGrid\Facades\Rule;
use Illuminate\Support\Facades\Log;

final class ArticleTable extends PowerGridComponent
{
    use LivewireAlert;

    public string $tableName = 'article-table';
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
        return Article::query()->orderBy('order_column');
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
        $deleted_record = Article::where('id', $this->delete_id)->firstOrFail();
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Запись удалена.', notify: 'success');
    }

    public function actions(Article $row): array
    {
        $buttons = [];
        $article = Article::find($row->id);

        // Получаем текущий минимальный порядок сортировки
        $minOrder = Article::min('order_column');
        // Получаем текущий максимальный порядок сортировки
        $maxOrder = Article::max('order_column');
        // Текущий порядок текущего документа
        $currentOrder = $article->order_column;

        $buttons[] = Button::add('Edit')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.article.edit', ['article' => $row->id]);

        if ($currentOrder <= $minOrder) {
            $buttons[] = Button::add('up_article')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success disabled')
                ->attributes(['disabled' => 'disabled']);
        } else {
            $buttons[] = Button::add('up_article')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_article', ['rowId' => $row->id]);
        }

        if ($currentOrder >= $maxOrder) {
            $buttons[] = Button::add('down_article')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success disabled')
                ->attributes(['disabled' => 'disabled']);
        } else {
            $buttons[] = Button::add('down_article')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_article', ['rowId' => $row->id]);
        }

        $buttons[] = Button::add('delete')
            ->slot('<i class="fas fa-trash"></i>')
            ->class('btn btn-danger')
            ->confirm('Вы действительно хотите удалить эту статью?')
            ->dispatch('article_delete', ['id' => $row->id]);

        return $buttons;
    }

    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $model = is_string($id) ? Article::where('slug', $id)->firstOrFail() : Article::findOrFail($id);

        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $model->updateOrFail([$field => $value]);
    }
    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Article::query()->find($id)->update([
            $field => e($value),
        ]);
        $this->skipRender();
    }

    #[\Livewire\Attributes\On(event: 'down_article')]
    public function down_article($rowId): void
    {
        try {
            $article = Article::findOrFail($rowId);
            $down = $article->down();
            if ($down) {
                $this->dispatch('toast-success', message: 'Статья перемещена вниз.', notify: 'success');
            } else {
                $this->dispatch('toast-warning', message: 'Статья не перемещена.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($article->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast-danger', message: ' Не удалось переместить статью вниз.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

    #[\Livewire\Attributes\On(event: 'up_article')]
    public function up_article($rowId): void
    {
        try {
            $article = Article::findOrFail($rowId);
            $up = $article->up();
            if ($up) {
                $this->dispatch('toast-success', message: 'Статья перемещена вверх.', notify: 'success');
            } else {
                $this->dispatch('toast-warning', message: 'Статья не перемещена.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($article->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast-danger', message: ' Не удалось переместить статью вверх.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

}
