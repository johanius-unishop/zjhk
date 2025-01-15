<?php

namespace App\Livewire;

use App\Models\Product;
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
    public $productId;
    public $mediaFiles = [];
    public $newFile;
    

    public function mount($id)
    {
        $this->productId = $id;
            
        $this->refreshMediaFiles(); // Обновляем массив mediaFiles
    }

    public function uploadFile($collectionName)
    {
        if (!empty($this->newFile)) {
            $product = Product::findOrFail($this->productId);
            $product->addMedia($this->newFile)->toMediaCollection($collectionName);
            $this->reset(['newFile']);
            $this->refreshMediaFiles(); // Обновляем массив mediaFiles
        }
    }

    public function deleteFile($collectionName)
    {
        $product = Product::findOrFail($this->productId);
        $mediaItems = $product->getMedia($collectionName);

        if ($mediaItems->isNotEmpty()) {
            foreach ($mediaItems as $mediaItem) {
                $mediaItem->delete();
            }
        }

        $this->refreshMediaFiles(); // Обновляем массив mediaFiles
    }

    private function refreshMediaFiles()
    {
        $this->mediaFiles = []; // Очищаем текущий массив

        // Перезагружаем данные о файлах
        $product = Product::findOrFail($this->productId);
        $collections = ['specification', 'dimensionalDrawing', 'overviewInformation', '3dModel'];

        foreach ($collections as $collectionName) {
            $mediaItems = $product->getMedia($collectionName);

            if ($mediaItems->isNotEmpty()) {
                foreach ($mediaItems as $mediaItem) {
                    $this->mediaFiles[$collectionName] = [
                        'url' => $mediaItem->getFullUrl(),
                        'mime_type' => $mediaItem->mime_type,
                    ];
                }
            } else {
                $this->mediaFiles[$collectionName] = null;
            }
        }
        $this->dispatch('$refresh');
    }



    public function render()
    {
        return view('livewire.product-files-component');
    }
}
