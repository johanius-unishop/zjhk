<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\VendorPdfCatalog;
use Illuminate\Support\Facades\Storage;

class VendorPdfCatalogFile extends Component
{
    use WithFileUploads;

    public $pdfFile;
    public $record;
    public $media_id;

    public function render()
    {
        return view('livewire.vendor-pdf-catalog-file');
    }

    public function mount(VendorPdfCatalog $record)
    {
        $this->record = $record;
    }

    public function uploadPdf()
    {
        
        // Валидируем загружаемый файл
        $this->validate([
            'pdfFile' => 'required|file|mimes:pdf'
        ]);

        // Сохраняем файл
        $path = $this->pdfFile->store('public/pdf_files');

        // Получаем URL файла
        $pdf_url = Storage::url($path);

        // Обновляем запись в базе данных
        //$this->record->update(['pdf_path' => $pdf_url]);

        // Оповещаем пользователя об успехе
        session()->flash('message', 'PDF catalog successfully updated.');
    }
}