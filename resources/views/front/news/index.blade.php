@extends('layouts.app')

@section('title', 'Новости')

@section('content')

<main>
    <section class="news section">
        <div class="news__container container">
            @include('components.breadcrumbs')
            <div class="news__content">
                <div class="news__title-body">
                    <h2>Новости</h2>
                    <p>Информация о поставщиках и корпоративных событиях</p>
                </div>
                <div class="card__item-wrapper">
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/electro-2022.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Участие ООО «КевТек» в выставке ЭЛЕКТРО-2024</h5>
                                <p>
                                    Выставка состоится 6-9 июня 2024 года в Экспоцентрег.
                                    Москва
                                </p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/electro-2023.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Haoke Electrical (ZJHK) на выставке ЭЛЕКТРО-2023</h5>
                                <p>Выставка состоится 6–9 июня 2023 года в Экспоцентре</p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="./images/content/handshake.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Заключили новые контракты с поставщиками</h5>
                                <p>Наш каталог пополнен новыми товарами</p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/electro-2022.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Участие ООО «КевТек» в выставке ЭЛЕКТРО-2024</h5>
                                <p>
                                    Выставка состоится 6-9 июня 2024 года в Экспоцентре г.
                                    Москва
                                </p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/handshake.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Заключили новые контракты с поставщиками</h5>
                                <p>Наш каталог пополнен новыми товарами</p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/handshake.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Заключили новые контракты с поставщиками</h5>
                                <p>Наш каталог пополнен новыми товарами</p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/handshake.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Заключили новые контракты с поставщиками</h5>
                                <p>Наш каталог пополнен новыми товарами</p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="news__item">
                        <div>
                            <div>
                                <img src="/images/content/electro-2022.jpg" alt="новости" />
                            </div>
                            <div>
                                <h5>Участие ООО «КевТек» в выставке ЭЛЕКТРО-2024</h5>
                                <p>
                                    Выставка состоится 6-9 июня 2024 года в Экспоцентрег.
                                    Москва
                                </p>
                            </div>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="product-page__show">
                    <button>Показать еще</button>
                </div>
                <div class="product-page__pagination">
                    <div class="product-page__pagination-content">
                        <button>
                            <img src="/images/icons/tick-grey.svg" alt="влево" />
                            <img
                                src="/images/icons/tick-black.svg"
                                style="display: none; transform: rotateZ(180deg)"
                                alt="влево" />
                        </button>
                        <ul class="product-page__page-list">
                            <li data-pagination><button class="_active">1</button></li>
                            <li data-pagination><button>2</button></li>
                            <li data-pagination><button>3</button></li>
                            <li data-pagination><button>4</button></li>
                            <li data-pagination><button>5</button></li>
                            <li data-pagination><button>...</button></li>
                            <li data-pagination><button>21</button></li>
                        </ul>
                        <button>
                            <img
                                src="/images/icons/tick-grey.svg"
                                style="display: none; transform: rotateZ(180deg)"
                                alt="вправо" />
                            <img src="/images/icons/tick-black.svg" alt="вправо" />
                        </button>
                    </div>
                    <div class="product-page__page-size" data-page-size>
                        <div>
                            <p class="product-page__page-select">
                                <span>Показывать по </span>
                                <button class="product-page__change-btn">
                                    <span id="page-count">6</span>
                                    <img
                                        src="/images/icons/tick-black.svg"
                                        alt="список страниц" />
                                </button>
                            </p>
                            <ul class="product-page__page-count" data-select-page>
                                <li><button data-page="6">6</button></li>
                                <li><button data-page="12">12</button></li>
                                <li><button data-page="24">24</button></li>
                                <li><button data-page="36">36</button></li>
                                <li><button data-page="48">48</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{{ Breadcrumbs::render('news'  ) }}
<h1> Новости</h1>

@foreach ($data['news'] as $news)
<div class="card shadow-sm">
    <a href=" {{ $news->front_url }} ">
        <img src="{{ $news->getFirstMediaUrl('images' , 'thumb')  }}" loading="lazy" decoding="async" alt="{{ $news->name }} image 1">
    </a>
    <div class="card-body">
        <a href=" {{ $news->front_url }} ">
            <h5 class="card-title"><b> {{ $news->name }}</b> </h5>
        </a>
        <p class="card-text"> {{ ($news->short_description) }} </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть </button>

            </div>
            {{-- <small class="text-body-secondary">9 mins</small> --}}
        </div>
    </div>
</div>

@endforeach
{{ $data['news'] ->links() }}
@stop