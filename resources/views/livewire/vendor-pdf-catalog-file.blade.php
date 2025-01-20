<div>
    <div class="row">
        @if(isset($file))
            <div class="col-md-2 mb-4">
                <figure class="figure">
                    <p><i class="fa fa-file-pdf"></i> <a href="{{ $file->getUrl() }}">{{ $file->file_name }}</a></p>
                    <table>
                        <tr>
                            <td>Размер:</td>
                            <td>{{ $file->human_readable_size }}</td>
                        </tr>
                        <tr>
                            <td>Загружено:</td>
                            <td>{{ $file->created_at }}</td>
                        </tr>
                    </table>
                    <figcaption class="figure-caption">
                        <a class="btn btn-danger" wire:confirm="Вы действительно хотите удалить этот файл?" wire:click="delete({{ $file->id }})" href="#"><i class="fa fa-trash"></i></a>
                        <a class="btn btn-success" wire:click="download({{ $file->id }})" href="#"><i class="fa fa-download"></i></a>
                    </figcaption>
                </figure>
            </div>
        @else
            <div class="col-md-12 text-center">
                <p class="error-message">PDF-файл не прикреплён.</p>
            </div>
        @endif

        @if(!isset($file))
            <div class="col-md-12">

                
                <div>
                    <input type="file" wire:model="up_file" name="up_file">
                    @error('up_file') <span class="error">{{ $message }}</span> @enderror
                    
                    <a class="btn btn-primary" wire:loading.attr="disabled" wire:click="uploadPdf" href="#">Загрузить PDF</a>
                </div>
            </div>
        @endif
    </div>
</div>

@push('css')
<style>
    .error-message {
        color: red;
    }
</style>
@endpush