<div class="product-desc__connection">
    <div class="product-desc__connection-select">
        <button class="_active">
            Отзывы
            <span>
                @if ($product->reviews)
                    {{ count($product->reviews) }}
                @endif
            </span>
        </button>
        <button>
            Вопросы
            <span>
                @if ($product->questions)
                    {{ count($product->questions) }}
                @endif
            </span>
        </button>
    </div>
    <div class="product-desc__testimonial-item _active" id="testimonial-section">
        <div class="product-desc__item-wrapper">
            <div class="product-desc__item-content">
                <div class="product-desc__item-gallery">
                    @foreach ($allReviewsImages as $reviewImage)
                        <div class="product-desc__item-img">
                            <a href="#">
                                <img src="{{ $reviewImage->getUrl('thumb') }}"
                                    alt="Миниатюра фотографии отзыва для товара {{ $product->name }}">
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
                        <div class="product-desc__item-sort-right">
                            <input type="checkbox" name="photo" id="photo">
                            <span>C фотографиями</span>
                        </div>
                    </div>
                    <div class="product-desc__review-wrapper">
                        <div class="product-desc__item-review">
                            @foreach ($product->reviews as $review_item)
                                <div class="product-desc__item-client">
                                    <p class="product-desc__client-name">{{ $review_item->user->name }}</p>
                                    <div class="product-desc__client-rating">
                                        <span>{{ $review_item->created_at->format('d.m.Y') }}</span>
                                        <div class="product-desc__testimonials-rating">
                                            <ul>
                                                @for ($i = 1; $i <= $review_item->rating; $i++)
                                                    <li>
                                                        <img src="{{ asset('images/icons/star.svg') }}"
                                                            alt="полная оценка">
                                                    </li>
                                                @endfor
                                                @for ($j = $review_item->rating + 1; $j <= 5; $j++)
                                                    <li>
                                                        <img src="{{ asset('images/icons/star-empty.svg') }}"
                                                            alt="пустая оценка">
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc__benefit">
                                    <p>Достоинства</p>
                                    <p>Отличный товар!</p>
                                </div>
                                <div class="product-desc__benefit">
                                    <p>Недостатки</p>
                                    <p>Нет</p>
                                </div>
                                <div class="product-desc__benefit">
                                    <p>Комментарий</p>
                                    <p>Полностью соответствует заявленным характеристикам.</p>
                                    <div style="display: none;" class="product-desc__testimonial-gallery">
                                        <div class="product-desc__item-img">
                                            <a href="#">
                                                <img src="img/products/review_photos.jpg" alt="фото товара">
                                            </a>
                                        </div>
                                        <div class="product-desc__item-img">
                                            <a href="#">
                                                <img src="img/products/review_photos.jpg" alt="фото товара">
                                            </a>
                                        </div>
                                        <div class="product-desc__item-img">
                                            <a href="#">
                                                <img src="img/products/review_photos.jpg" alt="фото товара">
                                            </a>
                                        </div>
                                        <div class="product-desc__item-img">
                                            <a href="#">
                                                <img src="img/products/review_photos.jpg" alt="фото товара">
                                            </a>
                                        </div>
                                        <div class="product-desc__item-img">
                                            <a href="#">
                                                <img src="img/products/review_photos.jpg" alt="фото товара">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc__likes">
                                    <p><img src="img/icons/thumbs_up.svg" alt="лайк">10</p>
                                    <p><img src="img/icons/thumbs_down.svg" alt="дизлайк">0</p>
                                    <a href="#">Ответить</a>
                                </div>
                                <div class="product-desc__answer">
                                    <button class="product-desc__answer-btn"><span>Ответ представителя</span><img
                                            src="img/icons/arrow-down.svg" alt="ответ представителя">
                                    </button>
                                    <p class="product-desc__answer-text">Здравствуйте, Александр! Благодарим
                                        за положительный отзыв.</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-desc__item-review">
                            <div class="product-desc__item-client">
                                <p class="product-desc__client-name">Александр В.</p>
                                <div class="product-desc__client-rating">
                                    <span>21.05.24</span>
                                    <div class="product-desc__testimonials-rating">
                                        <ul>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc__benefit">
                                <p>Достоинства</p>
                                <p>Отличный товар!</p>
                            </div>
                            <div class="product-desc__benefit">
                                <p>Недостатки</p>
                                <p>Нет</p>
                            </div>
                            <div class="product-desc__benefit">
                                <p>Комментарий</p>
                                <p>Полностью соответствует заявленным характеристикам.</p>
                                <div style="display: none;" class="product-desc__testimonial-gallery">
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="img/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="img/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="img/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="img/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="img/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc__likes">
                                <p><img src="img/icons/thumbs_up.svg" alt="лайк">10</p>
                                <p><img src="img/icons/thumbs_down.svg" alt="дизлайк">0</p>
                                <a href="#">Ответить</a>
                            </div>
                            <div class="product-desc__answer">
                                <button class="product-desc__answer-btn"><span>Ответ представителя</span><img
                                        src="img/icons/arrow-down.svg" alt="ответ представителя">
                                </button>
                                <p class="product-desc__answer-text">Здравствуйте, Александр! Благодарим
                                    за положительный отзыв.</p>
                            </div>
                        </div>
                        <div class="product-desc__item-review">
                            <div class="product-desc__item-client">
                                <p class="product-desc__client-name">Александр В.</p>
                                <div class="product-desc__client-rating">
                                    <span>21.05.24</span>
                                    <div class="product-desc__testimonials-rating">
                                        <ul>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc__benefit">
                                <p>Достоинства</p>
                                <p>Отличный товар!</p>
                            </div>
                            <div class="product-desc__benefit">
                                <p>Недостатки</p>
                                <p>Нет</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-desc__item-rating">
                <div class="product-desc__item-rating-container">
                    <div class="product-desc__testimonials-rating">
                        <ul>
                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                            <li><img src="img/icons/star.svg" alt="оценка"></li>
                        </ul>
                        <p>4.95/5</p>
                    </div>
                    <div class="product-desc__progress">
                        <div class="product-desc__progress-item">
                            <span>5</span>
                            <div>
                                <div class="product-desc__progress-level" style="width: 80%"></div>
                            </div>
                            <span>446</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>4</span>
                            <div>
                                <div class="product-desc__progress-level" style="width: 20%"></div>
                            </div>
                            <span>2</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>3</span>
                            <div>
                                <div class="product-desc__progress-level" style="width: 0"></div>
                            </div>
                            <span>0</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>0</span>
                            <div>
                                <div class="product-desc__progress-level" style="width: 0"></div>
                            </div>
                            <span>0</span>
                        </div>
                        <div class="product-desc__progress-item">
                            <span>1</span>
                            <div>
                                <div class="product-desc__progress-level" style="width: 0"></div>
                            </div>
                            <span>0</span>
                        </div>
                    </div>
                </div>
                <button data-modal-link="testimonial" class="product-desc__item-btn">Написать отзыв</button>
            </div>
        </div>
    </div>
    <div class="product-desc__questions-client" id="questions-client">
        <div class="product-desc__action-card">
            <div class="order__card-container">
                <div class="order__card-top-wrapper">
                    <h3>Дорогой <span>клиент</span>, вы можете задать свой вопрос:</h3>
                </div>
                <form action="" class="order__form">
                    <div class="product-desc__form-container">
                        <div class="order__customer-body">
                            <div class="order__customer-wrapper">
                                <div class="order__customer-conten-wrapper">
                                    <div class="input-group">
                                        <textarea name="person-comment" id="person-comment" placeholder=" " maxlength="1000"></textarea>
                                        <label for="person-comment">Ваш вопрос:</label>
                                        <div class="char-counter">
                                            <span id="char-count">0</span>/1000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="product-desc__form-btn" id="submit-btn" disabled>Отправить</button>
                </form>
            </div>
        </div>
        <div class="product-desc__questions-wrapper">
            <div class="product-desc__questions-body">
                <div class="product-desc__questions-row">
                    <div class="product-desc__questions-item">
                        <p class="product-desc__questions-author">Владимир</p>
                        <blockquote class="product-desc__questions-text">- Добрый день! Планирую организацию
                            автоматики для управления уличным освещением на даче. Хочу, чтобы свет включался
                            автоматически с наступлением темноты. Не могу выбрать между фотореле и
                            астротаймером. Участок находится в Подмосковье. Скажите, какой вариант будет более
                            надежным и точным в условиях нашей переменчивой погоды, с частыми тучами и дождями?
                            Также интересует, нужны ли к этим приборам дополнительные пускатели или они
                            подключаются напрямую к линии освещения? Заранее спасибо за консультацию!
                        </blockquote>
                        <p class="product-desc__questions-date">03.06.2025 г.</p>
                    </div>
                    <div></div>
                </div>
                <div class="product-desc__questions-row right">
                    <div></div>
                    <div class="product-desc__questions-item">
                        <p class="product-desc__questions-author">Администратор</p>
                        <blockquote class="product-desc__questions-text">- Да доставляем, подробнее о доставке
                            можно уточнить у менеджера.</blockquote>
                    </div>
                </div>
            </div>
            <div class="product-desc__questions-body">
                <div class="product-desc__questions-row">
                    <div class="product-desc__questions-item">
                        <p class="product-desc__questions-author">Петр Иванович</p>
                        <blockquote class="product-desc__questions-text"> - Есть ли у вас гарантия на товар?
                        </blockquote>
                        <p class="product-desc__questions-date">03.06.2025 г.</p>
                    </div>
                    <div></div>
                </div>
                <div class="product-desc__questions-row right">
                    <div></div>
                    <div class="product-desc__questions-item">
                        <p class="product-desc__questions-author">Администратор</p>
                        <blockquote class="product-desc__questions-text">- Да есть, подробнее о гарантии на
                            каждую позицию можно уточнить у менеджера.</blockquote>
                    </div>
                </div>
            </div>
            <div class="product-desc__questions-body">
                <div class="product-desc__questions-row">
                    <div class="product-desc__questions-item">
                        <p class="product-desc__questions-author">ООО "АлфавитЭкспресс"</p>
                        <blockquote class="product-desc__questions-text"> - Предусмотрена ли у вас
                            накопительная система скидок для постоянных клиентов?</blockquote>
                        <p class="product-desc__questions-date">03.06.2025 г.</p>
                    </div>
                    <div></div>
                </div>
                <div class="product-desc__questions-row right">
                    <div></div>
                    <div class="product-desc__questions-item">
                        <p class="product-desc__questions-author">Администратор</p>
                        <blockquote class="product-desc__questions-text">- Да существует, подробнее о ее
                            действии и системе накопления можно уточнить у персонального менеджера.</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
