<?php

namespace App\Livewire;

use App\Models\Documentation;
use App\Models\ProductPdf;
use App\Models\ProductModel;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads; // Добавили импорт трейта
class ProductFilesComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads; // Применили трейт
    public $isDisabled = false;
    public $documentation;
    public $mediaFile = [];
    public $newFile;


    public function mount($documentation)
    {
        $this->documentation = $documentation;

        $this->refreshMediaFiles(); // Обновляем массив mediaFiles
    }

    public function uploadFile()
    {
        if (!empty($this->newFile)) {
            $this->documentation->addMedia($this->newFile)->toMediaCollection('files');
            $this->reset(['newFile']);
            $this->refreshMediaFiles(); // Обновляем массив mediaFiles
        }
    }

    public function deleteFile()
    {
        $mediaItems = $this->documentation->getMedia('files');

        if ($mediaItems->isNotEmpty()) {
            foreach ($mediaItems as $mediaItem) {
                $mediaItem->delete();
            }
        }

        $this->refreshMediaFiles(); // Обновляем массив mediaFiles
    }

    private function refreshMediaFiles()
    {
        $mediaItem = $this->documentation->getMedia('files')->firstOrNull();

        $this->mediaFile['files'] = $mediaItem
            ? ['url' => $mediaItem->getFullUrl(), 'mime_type' => $mediaItem->mime_type]
            : null;

        $this->dispatch('$refresh');
    }


    public function render()
    {
        return view('livewire.documentation-files-component');
    }
}
