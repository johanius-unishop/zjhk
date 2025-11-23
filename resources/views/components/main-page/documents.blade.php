<section class="documents">
    <div class="documents__container container">
        <div class="documents__title-container">
            <h2 class="documents__title">Документация</h2>
            <button class="title-btn btn">Показать все</button>
        </div>
        <div class="documents__body">
            <div class="swiper documents-slider">
                <div class="swiper-wrapper documents-swiper-wrapper">
                    @foreach ($documentations as $doc)
                        <div class="swiper-slide documents__item">
                            <div class="documents__item-wrapper card-layout">
                                <div>
                                    <img src="{{ $doc->getMedia('images')->first()->getUrl('jpeg-images') }}"
                                        alt="{{ $doc->title }}">
                                </div>
                                <div>
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
