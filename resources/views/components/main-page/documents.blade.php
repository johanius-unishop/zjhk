<section class="documents">
    <div class="documents__container container">
        <div class="documents__title-container">
            <h2 class="documents__title">Документация</h2>
            <button class="title-btn btn">Показать все</button>
        </div>
        <div class="documents__body">
            <div class="swiper documents-slider">
                <div class="swiper-wrapper">
                    @foreach ($documentations as $doc)
                        <div class="swiper-slide documents__item">
                            <div>
                                <div>
                                    <img src="{{ $doc->getMedia('images')->first()->getUrl('jpeg-images') }}"
                                        alt="документация">
                                </div>
                                <div>
                                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                        3A, 10A, 16A, 32A</p>
                                </div>
                                <a href="#">Скачать</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="swiper-slide documents__item">
                        <div>
                            <div>
                                <img src="/images/products/doc-2.jpg" alt="документация">
                            </div>
                            <div>
                                <h5>Серия НА</h5>
                                <p>Компактные контактные вставки промышленных разъемов 3A, 10A, 16A, 32A </p>
                            </div>
                            <a href="#">Скачать</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-button-prev documents"></div>
            <div class="swiper-button-next documents"></div>
        </div>
    </div>
</section>
