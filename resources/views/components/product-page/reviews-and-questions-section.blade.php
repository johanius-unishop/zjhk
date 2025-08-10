<div class="product-desc__connection">
    <div class="product-desc__connection-select">
        <button class="_active">
            Отзывы
            <span>
                @if ($data['product']->reviews)
                    {{ count($data['product']->reviews) }}
                @endif
            </span>
        </button>
        <button>
            Вопросы
            <span>
                @if ($data['product']->questions)
                    {{ count($data['product']->questions) }}
                @endif
            </span>
        </button>
    </div>
    <div class="product-desc__testimonial-item">
        <div class="product-desc__item-wrapper">
            <div class="product-desc__item-content">
                <div class="product-desc__item-gallery">
                    @foreach ($data['allReviewImages'] as $reviewImage)
                        <div class="product-desc__item-img">
                            <a href="#">
                                <img src="{{ $reviewImage->getUrl('thumb') }}"
                                    alt="Миниатюра фотографии отзыва для товара {{ $data['product']->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="product-desc__item-sort">
                    <div class="product-desc__item-sort-select">
                        <div class="product-desc__item-sort-left">
                            <span>Показать сначала:</span>
                            <div class="product-desc__item-sort-target">
                                <button data-sort class="_target">Новые <img data-date class="_target"
                                        src="{{ asset('images/icons/sorting_by.svg') }}" alt="сортировать">
                                    <button data-sort>С высокой оценкой <img data-rating
                                            src="{{ asset('images/icons/sorting_by.svg') }}" alt="сортировать"></button>
                            </div>
                        </div>
                        <div class="product-desc__item-sort-mobile">
                            <button class="product-desc__mobile-sort-btn">
                                <img src="{{ asset('images/icons/sorting_by.svg') }}" alt="сортировать">
                            </button>
                            <div class="product-desc__sort-submenu">
                                <h4>Показать сначала:</h4>
                                <ul>
                                    <li>
                                        <label class="sort-control">
                                            <input type="radio" name="sort" checked />
                                            Новые
                                        </label>
                                    </li>
                                    <li>
                                        <label class="sort-control">
                                            <input type="radio" name="sort" />
                                            С высокой оценкой
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @foreach ($data['product']->reviews as $review_item)
                        <div class="product-desc__item-client">
                            <p class="product-desc__client-name">{{ $review_item->user->name }}</p>
                            <div class="product-desc__client-rating">
                                <span>{{ $review_item->created_at->format('d.m.Y') }}</span>
                                <div class="product-desc__testimonials-rating">
                                    <ul>
                                        @for ($i = 1; $i <= $review_item->rating; $i++)
                                            <li><img src="{{ asset('images/icons/star.svg') }}" alt="полная оценка">
                                            </li>
                                        @endfor
                                        @for ($j = $review_item->rating + 1; $j <= 5; $j++)
                                            <li><img src="{{ asset('images/icons/star-empty.svg') }}"
                                                    alt="пустая оценка"></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-desc__benefit">
                            <p>Достоинства</p>
                            <p>{{ $review_item->advantages }}</p>
                        </div>
                        <div class="product-desc__benefit">
                            <p>Недостатки</p>
                            <p>{{ $review_item->disadvantages }}</p>
                        </div>
                        <div class="product-desc__benefit">
                            <p>Комментарий</p>
                            <p>{{ $review_item->review_text }}</p>
                            <div style="display: none;" class="product-desc__testimonial-gallery">
                                @foreach ($review_item->getMedia('photos') as $review_photo_item)
                                    <div class="product-desc__item-img">
                                        <a href="{{ $review_photo_item->getUrl('') }}">
                                            <img src="{{ $review_photo_item->getUrl('thumb') }}"
                                                alt="фото товара в отзыве">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="product-desc__likes">
                            <a href="#">Ответить</a>
                        </div>
                        <div class="product-desc__answer">
                            <p>Ответ представителя <img src="{{ asset('images/icons/arrow_down.svg') }}"
                                    alt="ответ представителя">
                            </p>
                            <p>{{ $review_item->admin_reply }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="product-desc__item-rating">
                <div class="product-desc__item-rating-container">
                    <div class="product-desc__testimonials-rating">
                        <ul>
                            @for ($i = 1; $i <= $data['reviewRating']['roundedAverageRating']; $i++)
                                <li><img src="{{ asset('images/icons/star.svg') }}" alt="полная оценка"></li>
                            @endfor
                            @for ($j = $data['reviewRating']['roundedAverageRating'] + 1; $j <= 5; $j++)
                                <li><img src="{{ asset('images/icons/star-empty.svg') }}" alt="пустая оценка"></li>
                            @endfor
                        </ul>
                        <p>{{ $data['reviewRating']['averageReviewRating'] }} / 5</p>
                    </div>
                    <div class="product-desc__progress">
                        <div class="product-desc__progress-item">
                            <span>5</span>
                            <div>
                                <div class="product-desc__progress-level"
                                    style="width: {{ $data['reviewRating']['fiveStarReviewsPercent'] }}%"></div>
                            </div>
                            <span>{{ $data['reviewRating']['fiveStarReviewsCount'] }}</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>4</span>
                            <div>
                                <div class="product-desc__progress-level"
                                    style="width: {{ $data['reviewRating']['fourStarReviewsPercent'] }}%"></div>
                            </div>
                            <span>{{ $data['reviewRating']['fourStarReviewsCount'] }}</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>3</span>
                            <div>
                                <div class="product-desc__progress-level"
                                    style="width: {{ $data['reviewRating']['threeStarReviewsPercent'] }}%"></div>
                            </div>
                            <span>{{ $data['reviewRating']['threeStarReviewsCount'] }}</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>2</span>
                            <div>
                                <div class="product-desc__progress-level"
                                    style="width: {{ $data['reviewRating']['twoStarReviewsPercent'] }}%"></div>
                            </div>
                            <span>{{ $data['reviewRating']['twoStarReviewsCount'] }}</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>1</span>
                            <div>
                                <div class="product-desc__progress-level"
                                    style="width: {{ $data['reviewRating']['oneStarReviewsPercent'] }}%"></div>
                            </div>
                            <span>{{ $data['reviewRating']['oneStarReviewsCount'] }}</span>
                        </div>
                    </div>
                </div>
                @auth
                    <button data-modal-link="testimonial" class="product-desc__item-btn">Оставить отзыв</button>
                @endauth
            </div>
        </div>
    </div>
</div>
