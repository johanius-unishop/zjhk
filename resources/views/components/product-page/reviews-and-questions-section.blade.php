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
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                        </a>
                    </div>
                    <div class="product-desc__item-img">
                        <a href="#">
                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                            <span>+175</span>
                        </a>
                    </div>
                </div>
                <div class="product-desc__item-sort">
                    <div class="product-desc__item-sort-select">
                        <div class="product-desc__item-sort-left">
                            <span>Сортировать по:</span>
                            <div class="product-desc__item-sort-target">
                                <button data-sort class="_target">дате <img data-date class="_target"
                                        src="/images/icons/sorting_by.svg" alt="сортировать">
                                    <button data-sort>оценке <img data-rating src="/images/icons/sorting_by.svg"
                                            alt="сортировать"></button>
                                    <button data-sort>полезности <img data-useful src="/images/icons/sorting_by.svg"
                                            alt="сортировать"></button>
                            </div>
                        </div>
                        <div class="product-desc__item-sort-mobile">
                            <button class="product-desc__mobile-sort-btn">
                                <img src="/images/icons/sorting_by.svg" alt="сортировать">
                            </button>
                            <div class="product-desc__sort-submenu">
                                <h4>Сортировать</h4>
                                <ul>
                                    <li>
                                        <label class="sort-control">
                                            <input type="radio" name="sort" checked />
                                            По дате
                                        </label>
                                    </li>
                                    <li>
                                        <label class="sort-control">
                                            <input type="radio" name="sort" />
                                            По оценке
                                        </label>
                                    </li>
                                    <li>
                                        <label class="sort-control">
                                            <input type="radio" name="sort" />
                                            По полезности
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-desc__item-sort-right">
                            <input type="checkbox" name="photo" id="photo">
                            <span>C фото или видео</span>
                        </div>
                    </div>
                    <div class="product-desc__item-client">
                        <p class="product-desc__client-name">Александр В.</p>
                        <div class="product-desc__client-rating">
                            <span>21.05.24</span>
                            <div class="product-desc__testimonials-rating">
                                <ul>
                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
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
                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                </a>
                            </div>
                            <div class="product-desc__item-img">
                                <a href="#">
                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                </a>
                            </div>
                            <div class="product-desc__item-img">
                                <a href="#">
                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                </a>
                            </div>
                            <div class="product-desc__item-img">
                                <a href="#">
                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                </a>
                            </div>
                            <div class="product-desc__item-img">
                                <a href="#">
                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-desc__likes">
                        <p><img src="/images/icons/thumbs_up.svg" alt="лайк">10</p>
                        <p><img src="/images/icons/thumbs_down.svg" alt="дизлайк">0</p>
                        <a href="#">Ответить</a>
                    </div>
                    <div class="product-desc__answer">
                        <p>Ответ представителя <img src="/images/icons/arrow-down.svg" alt="ответ представителя">
                        </p>
                        <p>Здравствуйте, Александр! Благодарим за положительный отзыв.</p>
                    </div>
                </div>
            </div>
            <div class="product-desc__item-rating">
                <div class="product-desc__item-rating-container">
                    <div class="product-desc__testimonials-rating">
                        <ul>
                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
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
                @auth
                    <button data-modal-link="testimonial" class="product-desc__item-btn">Оставить отзыв</button>
                @endauth
            </div>
        </div>
    </div>
</div>
