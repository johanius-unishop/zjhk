@extends('layouts.app')

@section('title', 'Статьи')

@section('content')

<main>
    <section class="articles section">
        <div class="articles__container container">
            @include('components.breadcrumbs')
            <div class="articles__content">
                <div class="news__title">
                    <h2>Статьи</h2>
                    <p>Здесь вы можете найти полезную информацию о наших товарах</p>
                </div>
                <div class="card__item-wrapper">
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/photo-9.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/image-1.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/image-2.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/photo-10.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/photo-9.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/image-1.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/image-2.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                    <div class="articles__item">
                        <div>
                            <div>
                                <img src="/images/products/photo-10.png" alt="статьи">
                            </div>
                            <div>
                                <h5>О промышленных прямоугольных разъёмах</h5>
                                <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                                    3A, 10A, 16A, 32A</p>
                            </div>
                            <a href="#">Читать</a>
                        </div>
                    </div>
                </div>
                <div class="product-page__show">
                    <button>Показать еще</button>
                </div>
                <div class="product-page__pagination">
                    <div class="product-page__pagination-content">
                        <button>
                            <img src="{{ asset('images/icons/tick-grey.svg') }}" alt="влево">
                            <img src="{{ asset('images/icons/tick-black.svg') }}" style="display: none; transform:rotateZ(180deg)"
                                alt="влево">
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
                            <img src="{{ asset('images/icons/tick-grey.svg') }}" style="display: none; transform:rotateZ(180deg)"
                                alt="вправо">
                            <img src="{{ asset('images/icons/tick-black.svg') }}" alt="вправо">
                        </button>
                    </div>
                    <div class="product-page__page-size" data-page-size>
                        <div>
                            <p class="product-page__page-select">
                                <span>Показывать по </span>
                                <button class="product-page__change-btn">
                                    <span id="page-count">6</span>
                                    <img src="{{ asset('images/icons/tick-black.svg') }}" alt="список страниц">
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

@endsection

@section('css')


@stop

@section('js')
@if($errors->has('email') || $errors->has('password'))

<script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
</script>
@endif
@stop
