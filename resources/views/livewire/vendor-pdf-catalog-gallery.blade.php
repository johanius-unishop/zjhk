<div>
    <div class="row">
        @if(isset($image))
            
                <div class="col-md-2 mb-4">
                    <figure class="figure">
                        <a class="my-image-links" data-gall="gallery01" data-maxwidth="1600px" data-ratio="16x9" href="#" data-href="{{ $image->getUrl() }}">
                            <img width="100%" height="100%" src="{{ $image->getUrl('thumb') }}" class="img-fluid my-link" alt="{{ $image->getFullUrl() }}">
                        </a>
                        <table>
                            <tr>
                                <td>Размер:</td>
                                <td>{{ $image->human_readable_size }}</td>
                            </tr>
                            <tr>
                                <td>Загружено:</td>
                                <td>{{ $image->created_at }}</td>
                            </tr>
                        </table>
                        <figcaption class="figure-caption">
                            @if(!Auth::user()->can('manage product'))
                                @if($image->created_at->diffInDays(now()) < 1)
                                    <a class="btn btn-danger" wire:confirm="Вы действительно хотите удалить этот файл?" wire:click="delete({{ $image->id }})" href="#"><i class="fa fa-trash"></i></a>
                                @endif
                            @else
                                <a class="btn btn-danger" wire:confirm="Вы действительно хотите удалить этот файл?" wire:click="delete({{ $image->id }})" href="#"><i class="fa fa-trash"></i></a>
                            @endif
                            <a class="btn btn-success" wire:click="download({{ $image->id }})" href="#"><i class="fa fa-download"></i></a>
                        </figcaption>
                    </figure>
                </div>
            
        @else
        <div class="col-md-12 text-center">
                <p class="error-message">Обложка каталога не найдена</p>
            </div>
        @endif
    </div>
    @if(!isset($image))
        
            <div>
                <input type="file" wire:model.live="photo" name="photo">
                @error('photo') <span class="error">{{ $message }}</span> @enderror
                <a class="btn btn-primary" wire:loading.attr="disabled" wire:click="uploadFiles" href="#">Загрузить фото</a>
            </div>
        
    @endif
</div>

@push('css')
<style>
    .error-message {
        color: red;
    }
</style>
@endpush