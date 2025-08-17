@extends('layouts.app')

@section('content')
    <main>
        <section class="products">
            <div class="products__container container">
                @include('components.catalog-section.breadcrumbs')
                <div class="products__content">
                    <div class="products__title-container">
                        <h2>{{ $data['category']->name }}</h2>
                        <p>{{ $data['category']->description }}</p>
                    </div>
                    <div class="products__grid hide-subsequent-rows">
                        <a href="#">
                            <div class="products__item-wrapper">
                                <div>
                                    <img src="./img/products/photo-5.png" alt="товар">
                                </div>
                                <div>
                                    <h5>Комплекты серии HA
                                    </h5>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="products__item-wrapper">
                                <div>
                                    <img src="./img/products/photo-12.png" alt="товар">
                                </div>
                                <div>
                                    <h5>Комплекты серии HE
                                    </h5>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="products__item-wrapper">
                                <div>
                                    <img src="./img/products/photo-4.png" alt="товар">
                                </div>
                                <div>
                                    <h5>Комплекты серии HSB
                                    </h5>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="products__item-wrapper">
                                <div>
                                    <img src="./img/products/photo-14.png" alt="товар">
                                </div>
                                <div>
                                    <h5>Комплекты серии HK</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


@stop


@push('css')
@endpush

@push('js')
@endpush
