@extends('layouts.app')

@section('title', $title)

@section('content')
    <main>
        <section class="news-page">
            <div class="news-page__container container">
                @include('components.vendor-page.breadcrumbs')
                <div class="news-page__content">
                    <h2 class="news-page__title">О компании Zhejiang Haoke Electrical (ZJHK)</h2>
                    <p>Компания Zhejiang Haoke Electrical Co., Ltd. — это предприятие, которое занимается разработкой,
                        производством и продажей электрических соединителей, предназначенных для работы в сложных условиях.
                        Уставный капитал компании составляет 10 миллионов юаней.</p>
                    <p class="news-page__main-text"></p>
                    <h2 class="news-page__title">Производственные мощности</h2>
                    <p>Компания Haoke Electrical постоянно внедряет современные технологии, нанимает квалифицированных
                        специалистов и использует передовое оборудование, чтобы постояноо улучшать качество своей продукции.
                        Они
                        производят различные серии соединителей (HA, HE, HEE, HD, HDD, HSB, HK и HQ), которые подходят для
                        разных задач и областей применения. Эти соединители прошли сертификацию и соответствуют требованиям
                        международным стандартам (EAC, UL, CE, CQC, CCC и ROHS). Компания поставляет свою продукцию крупным
                        компаниям, входящим в
                        список Fortune 500.</p>
                    <div class="news-page__img-container">
                        <div>
                            <img src="{{ asset('images/content/vendors/zjhk/zjhk_1.jpg') }}" alt="Стенд ZJHK на выставке">
                        </div>
                        <div>
                            <img src="{{ asset('images/content/vendors/zjhk/zjhk_2.jpg') }}" alt="Выставочный стенд ZJHK">
                        </div>
                    </div>
                     <div class="news-page__img-container">
                        <div>
                            <img src="{{ asset('images/content/vendors/zjhk/zjhk_3.jpg') }}" alt="Соединители ZJHK">
                        </div>
                     </div>
                    <h2 class="news-page__title">Философия компании</h2>
                    <p class="news-page__main-text">Дух компании: быть практичными, инновационными и стремиться к высшему
                        качеству.</p>
                    <p class="news-page__main-text">Идея работы: создавать ценности для клиентов; предоставлять возможности
                        сотрудникам; приносить пользу обществу.</p>
                    <p class="news-page__main-text">Идея маркетингового обслуживания: относиться к клиенту как к королю,
                        постоянно улучшая обслуживание; всегда выполнять обещания и оставаться верными своим принципам.</p>
                    <p class="news-page__main-text">Идея качества: стремиться к полному удовлетворению клиентов, постоянно
                        совершенствуя все аспекты работы.</p>
                    <h2 class="news-page__title">Наше сотрудничество с ZJHK</h2>
                    <p>Мы сотрудничаем с 2023 года, ZJHK является нашим ключевым и надежным партнером. За этот период мы
                        смогли убедиться в высочайшей надежности компании ZJHK, компания в целом и отдельные ее сотрудники
                        всегда верны своему слову, готовы оказать любое содействие своим партнером и конечным потребителям
                        продукции.</p>
                </div>
                <div class="news-page__container ">
                    <div class="news-page__title-container">
                        <h2 class="news__title">Новости</h2>
                        <button class="title-btn btn">Показать все</button>
                    </div>
                    <div class="news__body">
                        <div class="swiper news-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide news__item">
                                    <div>
                                        <div>
                                            <img src="./img/content/electro-2022.jpg" alt="новости">
                                        </div>
                                        <div>
                                            <h5>Участие ООО «КевТек» в выставке ЭЛЕКТРО-2024</h5>
                                            <p>Выставка состоится 6-9 июня 2024 года в Экспоцентре г. Москва</p>
                                        </div>
                                        <div class="news-page__btn-container">
                                            <a href="#">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide news__item">
                                    <div>
                                        <div>
                                            <img src="./img/content/electro-2023.jpg" alt="новости">
                                        </div>
                                        <div>
                                            <h5>Haoke Electrical (ZJHK) на выставке ЭЛЕКТРО-2023</h5>
                                            <p>Выставка состоится 6–9 июня 2023 года в Экспоцентре</p>
                                        </div>
                                        <div class="news-page__btn-container">
                                            <a href="#">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide news__item">
                                    <div>
                                        <div>
                                            <img src="./img/content/handshake.jpg" alt="новости">
                                        </div>
                                        <div>
                                            <h5>Заключили новые контрактыс поставщиками</h5>
                                            <p>Наш каталог пополнен новыми товарами</p>
                                        </div>
                                        <div class="news-page__btn-container">
                                            <a href="#">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide news__item">
                                    <div>
                                        <div>
                                            <img src="./img/content/electro-2022.jpg" alt="новости">
                                        </div>
                                        <div>
                                            <h5>Участие ООО «КевТек» в выставке ЭЛЕКТРО-2024</h5>
                                            <p>Выставка состоится 6-9 июня 2024 года в Экспоцентрег. Москва</p>
                                        </div>
                                        <div class="news-page__btn-container">
                                            <a href="#">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide news__item">
                                    <div>
                                        <div>
                                            <img src="./img/content/handshake.jpg" alt="новости">
                                        </div>
                                        <div>
                                            <h5>Заключили новые контрактыс поставщиками</h5>
                                            <p>Наш каталог пополнен новыми товарами</p>
                                        </div>
                                        <div class="news-page__btn-container">
                                            <a href="#">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev news"></div>
                        <div class="swiper-button-next news"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
