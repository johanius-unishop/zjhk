<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class LogoVendorGallery extends Component
{
    use WithFileUploads;
    public $photos = [];
    public $images = [];
    public $record, $media_id;

    public $flag = 0;
    public $multiple;
    
    public function render()
    {
        return view('livewire.logo-vendor-gallery');
    }

    public function mount($record = null, $multiple = false)
    {
        $this->item     = @$record;
        $this->images   = @$record->getMedia('vendorLogo');//'images'
        $this->multiple = $multiple;
    }


    public function boot()
    {
        $this->images = $this->record->getMedia('vendorLogo');
        $this->dispatch('galleryModalPhoto');

    }
    public function delete($media_id)
    {

        try {
            $media = Media::find($media_id);
            $media->delete();
            $this->dispatch('toast', message: 'Логотип удален.', notify: 'error');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: ' Не удалось удалить логотип.' . $th->getMessage(), notify: 'error');
        }
        $this->dispatch('galleryModalPhoto');
        $this->dispatch('$refresh');
    }

    public function uploadFiles()
    {
        $this->flag = 1;
        $this->validate([
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:102400', // 10MB Max
        ]);
        foreach ($this->photos as $photo) {
            $this->record
                ->addMedia($photo)
                ->toMediaCollection('vendorLogo');
            $this->dispatch('toast', message: 'Логотип загружен.', notify: 'success');
        }

        $this->dispatch('galleryModalPhoto');
        $this->flag   = 0;
        $this->photos = [];
        $this->dispatch('$refresh');
    }


    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

}
