<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class VendorPdfCatalogFile extends Component
{
    use WithFileUploads;
    public $up_file;
    public $file;
    public $record, $pdf_id;

    public $flag = 0;
    public $multiple;
    
    public function render()
    {
        return view('livewire.vendor-pdf-catalog-file');
    }

    public function mount($record = null, $multiple = false)
    {
        $this->file = $record->hasMedia('pdfCatalog') ? $record->getMedia('pdfCatalog')->first() : null;
        $this->multiple = $multiple;
    }


    public function boot()
    {
        $this->file = $this->record->hasMedia('pdfCatalog') ? $this->record->getMedia('pdfCatalog')->first() : null;
    }

    public function delete($pdf_id)
    {

        try {
            $media = Media::find($pdf_id);
            $media->delete();
            $this->dispatch('toast', message: 'PDF-файл каталога удален.', notify: 'error');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: 'Не удалось удалить PDF-файл каталога.' . $th->getMessage(), notify: 'error');
        }
        $this->dispatch('$refresh');
    }

    public function uploadPdf()
    {
        $this->flag = 1;
        $this->validate([
            'up_file.*' => 'mimes:pdf|max:204800', // 200MB Max
        ]);
        
            $this->record
                ->addMedia($this->up_file)
                ->toMediaCollection('pdfCatalog');
            $this->dispatch('toast', message: 'PDF-файл каталога загружен.', notify: 'success');
        
        $this->flag   = 0;
        $this->up_file;
        $this->reset('up_file');
        $this->dispatch('$refresh');
    }


    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

}
