<div wire:poll.visible style="margin: 16px;">
    <div class="row">
        @if (!$images->isEmpty())
            @foreach ($images as $image)
                <div class="col-3">
                    <figure class="figure">
                        <img widht="100%" height="100%" src="{{ $image->getUrl('jpeg-images') }}"
                            class="img-fluid mb-2" alt="{{ $image->getFullUrl() }}">
                        <figcaption class="d-flex justify-content-center">
                            @if (auth()->check() && auth()->user()->isAdmin())
                                <a class="btn btn-danger mx-2" wire:confirm="Вы действительно хотите удалить этот файл ?"
                                    wire:click="delete({{ $image->id }})"><i class="fa fa-trash"></i></a>
                            @endif
                            <a class="btn btn-success mx-2" wire:click="download({{ $image->id }})"><i
                                    class="fa fa-download"></i></a>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        @else
            <div class="col-md-12 text-center">
                Изображение для документа не найдено
            </div>
            @if ($flag == 0)
                <div class="row">
                    <label for="photos">Изображение документа</label>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="file" class="form-control" id="photos" wire:model.live="photos"
                            name="photos" {{ $multiple == true ? 'multiple' : '' }}>
                    </div>
                    <div class="col-6">
                        <a class="btn {{ $flag == 0 ? 'btn-primary ' : 'btn-danger' }} ml-auto"
                            wire:loading.attr="disabled" wire:click="uploadFiles" href="#">Загрузить фото</a>
                    </div>
                </div>
                <div class="row">
                    @error('photos')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            @else
                <div class="col-md-12 text-center">
                    Загрузка ...
                </div>
            @endif
        @endif
    </div>
</div>
