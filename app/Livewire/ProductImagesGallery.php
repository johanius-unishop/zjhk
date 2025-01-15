<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Product;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductImagesGallery extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $photos = [];
    public $images = [];
    public $newOrder = [];
    public $record, $media_id;
    public $product;

    public $flag = 0;
    public $multiple;
    
   
    // #[On('success')]
    // public function manageSuccess()
    // {
    //     $this->images = $this->record->getMedia('images');
    // }
    public function render()
    {
        return view('livewire.product-images-gallery');
    }

    public function mount($record = null, $multiple = false)
    {
        $this->product = Product::find($record->id);
        
        $this->images   = $this->product->getMedia('images')
                            ->sortBy('order_column') // Используем sortBy для сортировки коллекции
                            ->values();//'images'
        $this->multiple = $multiple;
    }


    
    public function delete($media_id)
    {

        try {
            $media = Media::find($media_id);
            $media->delete();
            $this->dispatch('toast', message: 'Изображение удалено.', notify: 'error');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: 'Не удалось удалить изображение.' . $th->getMessage(), notify: 'error');
        }
        
        $this->product = Product::find($this->record->id);
        $this->images   = $this->product->getMedia('images')
                            ->sortBy('order_column')
                            ->values();
                            
        $this->dispatch('$refresh');
    }

    public function uploadFiles()
    {
        $this->flag = 1;
        $uploadedCount = 0;
        $this->validate([
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:102400', // 10MB Max
        ]);
        foreach ($this->photos as $photo) {
            $this->record
                ->addMedia($photo)
                ->toMediaCollection('images');
                $uploadedCount++;
        }
        $this->product = Product::find($this->record->id);
        $this->images   = $this->product->getMedia('images')
                            ->sortBy('order_column')
                            ->values();

        $this->dispatch('toast', message: 'Загружено ' . $uploadedCount . ' изображений товара', notify: 'success');
        $this->flag   = 0;
        $this->photos = [];
        $this->dispatch('$refresh');
    }


    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    #[On('updateImageOrder')]
    public function updateImages(array $newOrder)
    {
        // Получаем текущие значения order_column для каждого mediaId
        $currentOrders = Media::whereIn('id', $newOrder)
                            ->orderBy('order_column')
                            
                            ->pluck('id', 'order_column')
                            ->toArray();

        // Формируем массив новых значений order_column
        $newOrders = [];
        $index=0;
        foreach ($currentOrders as $orderColumn => $mediaId) {
            $newOrders[$orderColumn] = $newOrder[$index];
            $index++;
                    }

        
        // Обновляем порядок в соответствии с новыми позициями
        foreach ($newOrders as $orderColumn => $mediaId) {
            
            Media::where('id', $mediaId)->update(['order_column' => $orderColumn]);
        }
        
        $currentOrders = [];
        $old_images = $this->images;
        // Обновляем данные компонента
        $product = Product::find($this->record->id);
        
        $this->images   = $product->getMedia('images')
                            ->sortBy('order_column')
                            ->values();
        
        
        $this->dispatch('$refresh');
    }
}