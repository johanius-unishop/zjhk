<?php

namespace App\Livewire;

use App\Models\VendorPdfCatalog;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Livewire\WithFileUploads;

class VendorPdfCatalogFile extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $up_file;
    public $file;
    public $record, $pdf_id;
    
    public function mount(VendorPdfCatalog $record)
    {
        $this->record = $record;
        $this->loadPdf();
    }

    public function loadPdf()
    {
        // Перезагрузка модели $this->record
        $this->record = $this->record->fresh();
        $this->file = $this->record->getMedia('pdfCatalog')->first();
        
        $this->dispatch('vendor-pdf-catalog-file','$refresh');
        
    }

    public function delete($pdf_id)
    {
        $media = Media::find($pdf_id);
        $media->delete();
        $this->dispatch('toast', message: 'PDF-файл каталога удален.', notify: 'error');
        $this->loadPdf();
        
    }
    
    public function uploadPdf()
    {
        $this->validate([
            'up_file' => 'mimes:pdf|max:204800',
        ]);

        if ($this->up_file) {
            $this->record->addMedia($this->up_file)->toMediaCollection('pdfCatalog');
            $this->reset('up_file');
            $this->loadPdf();
            $this->dispatch('toast', message: 'PDF-файл каталога загружен.', notify: 'success');
        }
    }

    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    public function render()
    {
        return view('livewire.vendor-pdf-catalog-file');
    }

}
