<?php

namespace App\Livewire;

use App\Models\VendorPdfCatalog;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Livewire\WithFileUploads;

class VendorPdfCatalogGallery extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $photo;
    public $image;
    public $record;

    public function mount(VendorPdfCatalog $record)
    {
        $this->record = $record;
        $this->loadImage();
    }

    public function loadImage()
    {
        // Перезагрузка модели $this->record
        $this->record = $this->record->fresh();
        $this->image = $this->record->getMedia('pdfCatalogCoverImage')->first();
        
        $this->dispatch('vendor-pdf-catalog-gallery','$refresh');
        
    }

    public function delete($media_id)
    {
        $media = Media::find($media_id);
        $media->delete();
        $this->dispatch('toast', message: 'Обложка для каталога удалена.', notify: 'error');
        $this->loadImage();
        
    }

    public function uploadFiles()
    {
        $this->validate([
            'photo' => 'mimes:jpeg,png,jpg|max:10240',
        ]);

        if ($this->photo) {
            $this->record->addMedia($this->photo)->toMediaCollection('pdfCatalogCoverImage');
            $this->reset('photo');
            $this->loadImage();
            $this->dispatch('toast', message: 'Обложка для каталога загружена.', notify: 'success');
        }
    }

    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    public function render()
    {
        return view('livewire.vendor-pdf-catalog-gallery');
    }
}
