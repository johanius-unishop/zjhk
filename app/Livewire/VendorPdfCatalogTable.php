<?php

namespace App\Livewire;

use App\Models\VendorPdfCatalog;
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
use Livewire\Attributes\On;

final class VendorPdfCatalogTable extends PowerGridComponent
{
    use LivewireAlert;
    public $delete_catalog_id;
    public $parent_vendor;
    public string $tableName = 'VendorPdfCatalogTable';
    public array $name;
    public bool $showErrorBag = true;
    public $editingRowId = null;
    public $editingFieldName = '';
    public $editingValue = '';
    
    public function setUp(): array
    {
        return [
            Header::make()->withoutLoading(),
            Footer::make()->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return VendorPdfCatalog::query()
            ->where('vendor_id', $this->parent_vendor->id)
            ->with(['media' => function ($query) {
              $query->where('collection_name', 'pdfCatalogCoverImage');
        }]); 
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        $powerGridFields = PowerGrid::fields()
            ->add('name')
            ->add('catalog_image', function ($vendorPdfCatalog) { 
                if ($vendorPdfCatalog->media->isNotEmpty()) {
                    $firstMedia = $vendorPdfCatalog->media->first();
                    return '<img src="' . $firstMedia->getUrl() . '" style="max-width:50px">';
                }
                return '';
            });

            return $powerGridFields;
    }

    public function columns(): array
    {
        return [
            Column::make('Название', 'name')
                ->editOnClick(),
            Column::make('Изображение', 'catalog_image'),
            Column::action('Действия'),
        ];
    }
    

    public function filters(): array
    {
        return [
        ];
    }
                            
    #[On('update-vendor-pdf-catalog-table')]
    public function updateVendorPdfCatalogTable(): void
    {
        $this->dispatch('toast', message: 'Новый каталог добавлен!', notify: 'success');
        $this->refresh();
        $this->render();
    }


    #[On('pdf-catalog-delete')]
    public function pdfCatalogDelete($rowId): void
    {
        
        $this->delete_catalog_id = $rowId;
        $this->confirm('Вы действительно хотите удалить эту запись?', [
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'cancelButtonText' => 'Нет',
        ]);
    }

    #[On('confirmed')]
    public function pdfCatalogDeleteConfirmed()
    {
        $deleted_record = VendorPdfCatalog::where('id', $this->delete_catalog_id)->firstOrFail();
        $deleted_record->delete();
        $this->dispatch('toast', message: 'Каталог удален.', notify: 'success');
    }

    public function actions(VendorPdfCatalog $row): array
    {
        return [
            Button::add('view')
                ->slot('<i class="fas fa-edit"></i>')
                ->class('btn btn-primary')
                ->route('admin.vendor-pdf-catalog.edit', ['vendor_pdf_catalog' => $row->id]),
            Button::add('delete_catalog')
                ->slot('<i class="fas fa-trash"></i>')
                ->class('btn btn-danger')
                ->dispatch('pdf-catalog-delete', ['rowId' => $row->id]),
        ];
    }
    
    protected function rules()
    {
        return [
            'name.*' => ['required'],
        ];
    }

    protected function validationAttributes()
    {
        return [
            'name.*'       => 'Название каталога',
        ];
    }

    protected function messages()
    {
        return [
            'name.*.required'     => 'Название каталога должно быть заполнено',
        ];
    }
    
    public function onUpdatedEditable(int|string $id, string $field, string $value): void
    {
        $model = VendorPdfCatalog::findOrFail($id);

        $this->withValidator(function (\Illuminate\Validation\Validator $validator) use ($id, $field) {
            if ($validator->errors()->isNotEmpty()) {
                $this->dispatch('toggle-' . $field . '-' . $id);
            }
        })->validate();

        $model->updateOrFail([$field => $value]);
    }
}
