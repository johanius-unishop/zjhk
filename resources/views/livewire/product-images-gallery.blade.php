<div>
    <!-- Убрал лишнюю проверку count(), так как проверка if ($images) уже делает то же самое -->
    @if (count($images) > 0)
        <div class="row">
            <div class="col-md-2 mb-0 d-flex align-items-stretch">
                <a href="#" class="btn btn-outline-primary rounded-pill text-blue btn-block btn-sm disabled" tabindex="-1" role="button" aria-disabled="true">Главное фото</a>
            </div>
        </div>
    @endif

    <div x-data="{ sortable: null, newOrder: [] }"
        x-init="
            sortable = Sortable.create($refs.container, {
                animation: 150,
                onEnd: function(evt) {
                    let newOrder = Array.from(this.el.children).map(item => item.getAttribute('data-id'));
                    // Удалил проверку isArray, она всегда будет true, так как map возвращает массив
                    Livewire.dispatch('updateImageOrder', { newOrder });
                },
            });
        "
    >
        <div class="row" x-ref="container">
            @if (count($images) > 0)
                @foreach ($images as $key => $image)
                    <div class="col-md-2 mb-4 sort-item" wire:key="{{ $image->id }}" data-id="{{ $image->id }}">
                        <figure class="figure">
                            <a class="my-image-links" data-gall="gallery01" data-maxwidth="1600px" data-ratio="16x9" href="#" data-href="{{ $image->getUrl() }}"><img width="100%" height="100%" src="{{ $image->getUrl('thumb') }}" class="img-fluid my-link" alt="{{ $image->getFullUrl() }}"></a>

                            <figcaption class="figure-caption">
                                <a class="btn btn-success btn-sm" wire:click="download({{ $image->id }})" href="#"><i class="fa fa-download"></i></a>
                                <a class="btn btn-outline-danger btn-sm " wire:confirm="Вы действительно хотите удалить этот файл?" wire:click="delete({{ $image->id }})"><i class="fa fa-trash"></i></a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text-center">Изображений не найдено</div>
            @endif
        </div>
    </div>

    @if ($flag == 0)
        <form wire:submit.prevent="uploadFiles" class="mb-2">
            <div>
                <input type="file" wire:model="photos" name="photos" multiple={{ $multiple }}>
                @error('photos') <span class="error">{{ $message }}</span> @enderror
                <button type="submit" wire:loading.attr="disabled" class="btn btn-outline-success btn-sm mx-2">Добавить изображения</button>
                
            </div>
        </form>
    @else
        <div class="col-md-12 text-center">
            Загрузка ...
        </div>
    @endif
</div>