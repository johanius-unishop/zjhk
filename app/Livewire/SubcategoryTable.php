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
                $this->dispatch('toast', message: 'Категория успешно опущена вниз.', notify: 'success');
            } else {
                $this->dispatch('toast', message: 'Категория не перемещена.', notify: 'danger');
            }
        } catch (\Throwable $th) {
            Log::info($category->name . 'Ошибка  выполнения скрипта: ' . $th->getMessage() . ' .');
            $this->dispatch('toast', message: ' Не удалось опустить  запись.' . $th->getMessage(), notify: 'error');
            throw $th;
        }
        $this->dispatch('$refresh');
    }

    public function actions(Category $row): array
    {
        return [
            Button::add('Просмотр')
                ->slot('<i class="fas fa-folder"></i>')
                ->class('btn btn-primary')
                ->route('admin.category.show', ['category' => $row->id]),
            Button::add('up_category')
                ->slot('<i class="fas fa-arrow-up"></i>')
                ->class('btn btn-success')
                ->dispatch('up_category', ['rowId' => $row->id]),
            Button::add('down_category')
                ->slot('<i class="fas fa-arrow-down"></i>')
                ->class('btn btn-success')
                ->dispatch('down_category', ['rowId' => $row->id]),
            Button::add('Редактировать')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.category.edit', ['category' => $row->id]),
            Button::add('Удалить')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('delete_subcategory', ['rowId' => $row->id]),
        ];
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
