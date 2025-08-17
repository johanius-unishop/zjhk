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
                    @if ($data['childrens']->count() > 0)
                    <div class="products__grid hide-subsequent-rows">
                        @foreach ($data['childrens'] as $subcategory)
                        <a href="{{ config('app.url') . "/category/" . $subcategory->slug }}">
                            <div class="products__item-wrapper">
                                <div>
                                    <img src="{{ $data['images'][0]->getUrl() }}" alt="товар">
                                </div>
                                <div>
                                    <h5>{{ $subcategory->name }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </main>


@stop


@push('css')
@endpush

@push('js')
@endpush
