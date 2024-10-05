<div class="col">
    <div class="card shadow-sm">
        <a href=" {{ $product->front_url }} ">
            <img class="img-thumbnail  mx-auto d-block" src="{{ $product->getFirstMediaUrl('images' , 'thumb')  }}" loading="lazy" decoding="async" alt="{{ $product->name }} image 1">

        </a>
        <div class="card-body">
            <a href=" {{ $product->front_url }} ">
                <h5 class="card-title"><b> {{ $product->name }}</b> </h5>
            </a>
            <p class="card-text"> {!! ($product->short_description) !!} </p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary btn-add-in-cart" data-product="{{  $product->id  }}" title="Добавить в корзину">Корзина </button>
                    <button type="button" class="btn btn-sm  btn-favourites btn-info" @if ( $product->inFavourites ) active @endif title="Добавить в избранное" data-product="{{ $product->id  }}">Избранное</button>
                </div>
                {{-- <small class="text-body-secondary">9 mins</small> --}}
            </div>
        </div>
    </div>
</div>
