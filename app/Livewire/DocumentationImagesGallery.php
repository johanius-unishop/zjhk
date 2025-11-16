<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Documentation;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;

class DocumentationImagesGallery extends Component
{
    use WithFileUploads;
    public $photos = [];
    public $images = [];
    public $record, $media_id;

    public $flag = 0;
    public $multiple;

    public function render()
    {
        return view('livewire.documentation-images-gallery');
    }

    public function mount($record = null, $multiple = false)
    {
        $this->images   = @$record->getMedia('images');//'images'
        $this->multiple = $multiple;
    }

    public function delete($media_id)
    {

        try {
            $media = Media::find($media_id);
            $media->delete();
            $this->dispatch('toast', message: 'Изображение для документа удалено.', notify: 'error');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: 'Изображение для документа не удалось удалить.' . $th->getMessage(), notify: 'error');
        }
        $this->galleryModalPhoto();
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
                ->toMediaCollection('images');
            $this->dispatch('toast', message: 'Изображение для документа загружено.', notify: 'success');
        }

        $this->flag   = 0;
        $this->photos = [];
        $this->galleryModalPhoto();
    }


    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    public function galleryModalPhoto()
    {
        $document = Documentation::findOrFail($this->record->id);
        $image   = $document->getMedia('images')->first();//'images'

        $this->images = collect([$image]);
        $this->dispatch('$refresh');
    }

}
