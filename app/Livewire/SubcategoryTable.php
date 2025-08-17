<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use Illuminate\Support\Facades\Log;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Jantinnerezo\LivewireAlert\LivewireAlert;

final class SubcategoryTable extends PowerGridComponent
{
    use LivewireAlert;

    public string $tableName = 'subcategory-table';
    public string $parent_category;
    public $delete_id;
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

    public function datasource(): Builder
    {
        return Category::query()
            ->defaultOrder()
            ->where('parent_id', $this->parent_category)
            ->withCount('childrens')
            ->withCount('products');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Название категории', 'name')
                ->searchable()
                ->editOnClick(),
            Column::make('Показывать на сайте', 'published')
                ->toggleable(),
            Column::make('Подкатегории', 'childrens_count'),
            Column::make('Товары', 'products_count'),
            Column::action('Действия'),
        ];
    }

    public function filters(): array
    {
        return [];
    }


    #[\Livewire\Attributes\On('delete_subcategory')]
    public function delete_subctegory($rowId): void
    {

        $this->delete_id = $rowId;
        $this->confirm('Вы действительно хотите удалить эту категорию?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[\Livewire\Attributes\On('confirmed')]
    public function confirmed()
    {
        $deleted_record = Category::where('id', $this->delete_id)->withCount('childrens')->withCount('products')->firstOrFail();
        if ($deleted_record->childrens_count > 0) {
            $this->dispatch('toast', message: 'Эта категория содержит подкатегории. Сначала удалите их!', notify: 'error');
            return;
        }
        if ($deleted_record->products_count > 0) {
            $this->dispatch('toast', message: 'Эта категория содержит товары. Сначала удалите их!', notify: 'error');
            return;
        }

        if ($deleted_record->seo()->exists()) {
            $deleted_record->seo()->delete();
        }
        if ($deleted_record->media()->exists()) {
            $deleted_record->media()->delete();
        }
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Категория удалена.', notify: 'success');
    }

    #[\Livewire\Attributes\On(event: 'down_category')]
    public function category_down($rowId): void
    {
        try {
            $category = Category::findOrFail($rowId);
            $down = $category->down();
            if ($down) {
                $this->dispatch('toast', message: 'Категория перемещена вниз.', notify: 'success');
            } else {
                $this->dispatch('toast', message: 'Категория не перемещена.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($category->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось переместить категорию вниз.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

    #[\Livewire\Attributes\On(event: 'up_category')]
    public function category_up($rowId): void
    {
        try {
            $category = Category::findOrFail($rowId);
            $up = $category->up();
            if ($up) {
                $this->dispatch('toast', message: 'Категория перемещена вверх.', notify: 'success');
            } else {
                $this->dispatch('toast', message: 'Категория не перемещена.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($category->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось переместить категорию вверх.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

    public function actions(Category $row): array
    {
        $category = Category::find($row->id);
        $next_siblings_count = $category->getNextSiblings()->count();
        $prev_siblings_count = $category->getPrevSiblings()->count();

        $buttons = [];

        // Всегда добавляем кнопку просмотра
        $buttons[] = Button::add('Просмотр')
            ->slot('<i class="fas fa-folder"></i>')
            ->class('btn btn-primary')
            ->route('admin.category.show', ['category' => $row->id]);

        // Условие для показа кнопки перемещения вверх
        if ($prev_siblings_count > 0) {
            $buttons[] = Button::add('up_category')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_category', ['rowId' => $row->id]);
        }

        // Условие для показа кнопки перемещения вниз
        if ($next_siblings_count > 0) {
            $buttons[] = Button::add('down_category')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_category', ['rowId' => $row->id]);
        }

        // Всегда добавляем кнопку редактирования
        $buttons[] = Button::add('Редактировать')
            ->slot('<i class="fas fa-edit"></i>')
            ->class('btn btn-primary')
            ->route('admin.category.edit', ['category' => $row->id]);

        // Всегда добавляем кнопку удаления
        $buttons[] = Button::add('Удалить')
            ->slot('<i class="fas fa-trash"></i>')
            ->class('btn btn-danger')
            ->dispatch('delete_subcategory', ['rowId' => $row->id]);

        return $buttons;
    }
    #[\Livewire\Attributes\On('update-subcategory-table')]
    public function updateSubcategoryTable(): void
    {
        $this->dispatch('toast', message: 'Новая категория добавлена!', notify: 'success');
        $this->refresh();
        $this->render();
    }
    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $updated = Category::query()->find($id)->update([
            $field => $value,
        ]);
    }

    protected function rules()
    {
        return [
            'name.*' => [
                'required',
                'min:3',
            ],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название типа товара из комплекта',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название типа товара из товара должно быть заполнено',
            'name.*.min'     => 'Название типа товара из товара должно содержать минимум 3 символа',
        ];
    }

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        Category::query()->find($id)->update([
            $field => e($value),
        ]);

        $this->skipRender();
    }
}
