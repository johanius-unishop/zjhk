<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Modelable;
class ProductFileUploadComponent extends Component
{
    use WithFileUploads;


    #[Modelable]
    public $record;
    public $media_id;

    public $file_specification;
    public $file;
    public $file_dimensional_drawing;

    public $file_overview_information;

    public $file_specifications = [];
    public $file_dimensionalDrawings = [];
    public $file_overviewInformations = [];

    public $flag = 0;





    public function upload_file_specification()
    {
        $this->validate([
            // 'file_name' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg|max:102400', // 10MB Max
            'file_specification' => 'file|mimes:pdf|max:10240000', // 10MB Max
        ]);
        $this->flag = 1;
        $this->record
            ->addMedia($this->file_specification)
            ->toMediaCollection('specifications');
        $this->dispatch('toast', message: 'Каталог успешно создан.', notify: 'success');
        $this->flag = 0;
        $this->reset(['file_specification', 'file_dimensional_drawing', 'file_overview_information']);
        $this->loadFilesLists();
        $this->dispatch('$refresh');
    }

    public function upload_dimensional_drawing()
    {
        $this->validate([

            'file_dimensional_drawing' => 'file|mimes:pdf|max:10240000', // 10MB Max
        ]);
        $this->flag = 1;
        $this->record
            ->addMedia($this->file_dimensional_drawing)
            ->toMediaCollection('dimensionalDrawing');
        $this->dispatch('toast', message: 'Каталог успешно создан.', notify: 'success');
        $this->flag = 0;
        $this->reset(['file_specification', 'file_dimensional_drawing', 'file_overview_information']);
        $this->loadFilesLists();
        $this->dispatch('$refresh');
    }

    public function upload_overview_information()
    {
        $this->validate([

            'file_overview_information' => 'file|mimes:pdf|max:10240000', // 10MB Max
        ]);
        $this->flag = 1;
        $this->record
            ->addMedia($this->file_overview_information)
            ->toMediaCollection('overviewInformation');
        $this->dispatch('toast', message: 'Каталог успешно создан.', notify: 'success');
        $this->flag = 0;
        $this->reset(['file_specification', 'file_dimensional_drawing', 'file_overview_information']);
        $this->loadFilesLists();
        $this->dispatch('$refresh');
    }

    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    public function mount($record = null, $multiple = false)
    {
        $this->item                      = @$record;
        $this->file_specifications       = @$record->getMedia('specifications');
        $this->file_dimensionalDrawings  = @$record->getMedia('dimensionalDrawing');
        $this->file_overviewInformations = @$record->getMedia('overviewInformation');
        $this->multiple                  = $multiple;
    }

    public function delete($media_id)
    {

        try {
            $media = Media::find($media_id);
            $media->delete();
            $this->dispatch('toast', message: 'Файл удален.', notify: 'error');
        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: ' Не удалось удалить файл.' . $th->getMessage(), notify: 'error');
        }
        $this->loadFilesLists();
        $this->dispatch('$refresh');

    }




    public function loadFilesLists()
    {
        $this->file_specifications       = $this->record->getMedia('specifications');
        $this->file_dimensionalDrawings  = $this->record->getMedia('dimensionalDrawing');
        $this->file_overviewInformations = $this->record->getMedia('overviewInformation');
        $this->dispatch('$refresh');
    }
    public function render()
    {
        return view('livewire.product-file-upload-component');
    }
}
