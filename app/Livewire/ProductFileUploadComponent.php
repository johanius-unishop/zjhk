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

    public $fileSpecification;

    public $fileDimensionalDrawing;

    public $fileOverviewInformation;

    public $fileSpecifications = [];
    public $fileDimensionalDrawings = [];
    public $fileOverviewInformations = [];

    public $flag = 0;
    public $multiple;




    public function uploadFileSpecification()
    {
        $this->validate([
            'fileSpecification' => 'file|mimes:pdf|max:10240000', // 10MB Max
        ]);
        try {
            $this->record
                ->addMedia($this->fileSpecification)
                ->toMediaCollection('specifications');
            $this->dispatch('toast', message: 'Файл успешно загружен', notify: 'success');
            $this->reset(['fileSpecification', 'fileDimensionalDrawing', 'fileOverviewInformation']);

            $this->fileSpecifications = $this->record->getMedia('specifications');

        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: ' Не удалось загрузить  файл.' . $th->getMessage(), notify: 'error');
        }
        $this->dispatch('$refresh');
    }

    public function uploadDimensionalDrawing()
    {
        $this->validate([
            'fileDimensionalDrawing' => 'file|mimes:pdf|max:10240000', // 10MB Max
        ]);

        try {
            $this->record
                ->addMedia($this->fileDimensionalDrawing)
                ->toMediaCollection('dimensionalDrawing');
            $this->dispatch('toast', message: 'Файл успешно загружен', notify: 'success');
            $this->reset(['fileSpecification', 'fileDimensionalDrawing', 'fileOverviewInformation']);

            $this->fileDimensionalDrawings = $this->record->getMedia('dimensionalDrawing');

        }
        catch (\Throwable $th) {
            $this->dispatch('toast', message: ' Не удалось загрузить  файл.' . $th->getMessage(), notify: 'error');
        }
        $this->dispatch('$refresh');


    }

    public function uploadOverviewInformation()
    {

        $this->validate([
            'fileOverviewInformation' => 'file|mimes:pdf|max:10240000', // 10MB Max
        ]);
        $this->record
            ->addMedia($this->fileOverviewInformation)
            ->toMediaCollection('overviewInformation');
        $this->dispatch('toast', message: 'Файл успешно загружен', notify: 'success');
        $this->fileOverviewInformations = $this->record->getMedia('overviewInformation');
        $this->reset(['fileSpecification', 'fileDimensionalDrawing', 'fileOverviewInformation']);
        $this->dispatch('$refresh');
    }

    public function download(Media $mediaItem)
    {
        return response()->download($mediaItem->getPath(), $mediaItem->file_name);
    }

    public function mount($record = null, $multiple = false)
    {

        // $this->multiple                  = $multiple;
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
        $this->dispatch('$refresh');

    }

    public function render()
    {

        // $this->record                   = @$record;
        $this->fileSpecifications       = @$this->record->getMedia('specifications');
        $this->fileDimensionalDrawings  = @$this->record->getMedia('dimensionalDrawing');
        $this->fileOverviewInformations = @$this->record->getMedia('overviewInformation');
        return view('livewire.product-file-upload-component');
    }
}
