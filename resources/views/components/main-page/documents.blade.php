<section class="documents">
    <div class="documents__container container">
        <div class="documents__title-container">
            <h2 class="documents__title">Документация</h2>
            <a href="{{ route('news.index') }}">
                <button class="title-btn btn">Показать все</button>
            </a>
        </div>
        <div class="documents__body">
            <div class="swiper documents-slider">
                <div class="swiper-wrapper documents-swiper-wrapper">
                    @foreach ($documentations as $doc)
                        <div class="swiper-slide documents__item">
                            <div class="documents__item-wrapper card-layout">
                                <div>
                                    @if (
                                        $acceptsWebP &&
                                            $doc->getFirstMedia('images') &&
                                            $doc->getFirstMedia('images')->hasGeneratedConversion('webp-images'))
                                        <img src="{{ $doc->getFirstMedia('images')->getUrl('webp-images') }}"
                                            alt="Обложка PDF материала: {{ $doc->vendor->name }} {{ $doc->title }}"
                                            loading="lazy">
                                    @elseif (
                                        !$acceptsWebP &&
                                            $doc->getFirstMedia('images') &&
                                            $doc->getFirstMedia('images')->hasGeneratedConversion('jpeg-images'))
                                        <img src="{{ $doc->getFirstMedia('images')->getUrl('jpeg-images') }}"
                                            alt="Обложка PDF материала: {{ $doc->vendor->name }} {{ $doc->title }}"
                                            loading="lazy">
                                    @else
                                        <img src="{{ $doc->getFirstMedia('images') ? $doc->getFirstMedia('images')->getUrl() : asset('/images/default_image.jpg') }}"
                                            alt="Обложка PDF материала: {{ $doc->vendor->name }} {{ $doc->title }}"
                                            loading="lazy">
                                    @endif






                                </div>
                                <div class="documents__item-wrapper documents-description">
                                    <h5>{{ $doc->title }}</h5>
                                    <p>{{ $doc->text }}</p>
                                </div>
                                <a href="{{ $doc->getMedia('files')->first()->getFullUrl() }}" download>Скачать</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-prev documents"></div>
            <div class="swiper-button-next documents"></div>
        </div>
    </div>
</section>
