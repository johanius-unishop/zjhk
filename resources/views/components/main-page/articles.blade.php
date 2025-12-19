<section class="articles">
    <div class="articles__container container">
        <div class="articles__title-container">
            <h2 class="articles__title">Статьи</h2>
            <a href="{{ route('articles') }}">
                <button class="title-btn btn">Показать все</button>
            </a>

        </div>
        <div class="articles__body">
            <div class="swiper articles-slider">
                <div class="swiper-wrapper">
                    @foreach ($articles as $article)
                        <div class="swiper-slide articles__item">
                            <div>
                                <div>
                                    @if (
                                        $acceptsWebP &&
                                            $article->getFirstMedia('previewImages') &&
                                            $article->getFirstMedia('previewImages')->hasGeneratedConversion('webp-thumb'))
                                        <img src="{{ $article->getFirstMedia('previewImages')->getUrl('webp-images') }}"
                                            alt="Новость: {{ trim($article->name) }}"
                                            loading="lazy">
                                    @elseif (
                                        !$acceptsWebP &&
                                            $article->getFirstMedia('previewImages') &&
                                            $article->getFirstMedia('previewImages')->hasGeneratedConversion('thumb'))
                                        <img src="{{ $article->getFirstMedia('previewImages')->getUrl('thumb') }}"
                                            alt="Новость: {{ trim($article->name) }}"
                                            loading="lazy">
                                    @else
                                        <img src="{{ $article->getFirstMedia('previewImages') ? $article->getFirstMedia('previewImages')->getUrl() : asset('/images/default_image.jpg') }}"
                                            alt="Новость: {{ trim($article->name) }}"
                                            loading="lazy">
                                    @endif
                                </div>
                                <div>
                                    <h5>{{ trim($article->name) }}</h5>
                                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                        3A, 10A, 16A, 32A</p>
                                </div>
                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">Читать</a>
                            </div>
                        </div>
                        <div class="swiper-slide articles__item">
                            <div>
                                <div>
                                    <img src="/images/products/image-1.png" alt="статьи">
                                </div>
                                <div>
                                    <h5>Типы клемм в контактных вставках</h5>
                                    <p>Контактные вставки и cпособы присоединения проводников к контактам</p>
                                </div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                        <div class="swiper-slide articles__item">
                            <div>
                                <div>
                                    <img src="/images/products/image-2.png" alt="статьи">
                                </div>
                                <div>
                                    <h5>Подбор элементов прямоугольного промышленного разъёма
                                    </h5>
                                    <p>Совместимость компонентов разъёма по типоразмеру</p>
                                </div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                        <div class="swiper-slide articles__item">
                            <div>
                                <div>
                                    <img src="/images/products/image-1.png" alt="статьи">
                                </div>
                                <div>
                                    <h5>Типы клемм в контактных вставках</h5>
                                    <p>Контактные вставки и способы присоединения проводников к контактам</p>
                                </div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                        <div class="swiper articles__item">
                            <div>
                                <div>
                                    <img src="/images/products/photo-10.png" alt="статьи">
                                </div>
                                <div>
                                    <h5>Информация о сальниках (кабельных вводах)</h5>
                                    <p>Основная информация о типах сальников и их назначении</p>
                                </div>
                                <a href="#">Читать</a>
                            </div>
                        </div>
                        <div class="swiper-slide articles__item">
                            <div>
                                <div>
                                    <img src="/images/products/image-2.png" alt="статьи">
                                </div>
                                <div>
                                    <h5>Подбор элементов прямоугольного промышленного разъёма
                                    </h5>
                                    <p>Совместимость компонентов разъёма по типоразмеру</p>
                                </div>
                                <a href="#">Читать</a>
                            </div>
                        </div>

                </div>
            </div>
            <div class="swiper-button-prev articles"></div>
            <div class="swiper-button-next articles"></div>
        </div>

    </div>
</section>
