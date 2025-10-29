<section class="popular">
    <div class="popular__container container">
        <div class="popular__wrapper">
            <h2 class="popular__title">
                Популярные товары
            </h2>
            <div class="popular__grid hide-subsequent-rows">
                @foreach ($popularProductsWithDetails as $popularProduct)
                    <a href="{{ route('product.show', ['slug' => $popularProduct->product->slug]) }}">
                        <div class="popular__item-wrapper">
                            <div>
                                <img src="/images/products/photo-2.png" alt="товар">
                            </div>
                            <div>
                                <h5>{{ $popularProduct->product->name }}<</h5>
                                <p>{{ $popularProduct->product->article }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
