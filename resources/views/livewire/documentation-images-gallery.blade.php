<div wire:poll.visible style="margin: 16px;">
    <div class="row">
        @if (!$images->isEmpty())
            @foreach ($images as $image)
                <div class="col-md-2 mb-4">
                    <figure class="figure">
                        <a class="my-image-links" data-gall="gallery01" data-maxwidth="1600px" data-ratio="16x9"
                            href="#" data-href="{{ $image->getUrl() }}"><img widht="100%" height="100%"
                                src="{{ $image->getUrl('jpeg-images') }}" class="img-fluid my-link"
                                alt="{{ $image->getFullUrl() }}"></a>

                                <p>Размер: {{ $image->human_readable_size }}</p>
                                <p>Загружено: {{ $image->created_at }}</p>

                        <figcaption class="figure-caption">
                            @if (!Auth::user()->can('manage product'))
                                <a class="btn btn-danger "
                                        wire:confirm="Вы действительно хотите удалить этот файл ?"
                                        wire:click="delete({{ $image->id }})"><i class="fa fa-trash"></i></a>
                            @else
                                <a class="btn btn-danger " wire:confirm="Вы действительно хотите удалить этот файл ?"
                                    wire:click="delete1({{ $image->id }})"><i class="fa fa-trash"></i></a>
                            @endif
                            <a class="btn btn-success " wire:click="download({{ $image->id }})"><i
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
