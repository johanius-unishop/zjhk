<div class="col">
    <div class="card shadow-sm text-bg-secondary">
        <a href=" {{ $children->front_url }} ">
            <img class="card-img-top" src="{{ $children->getFirstMediaUrl('images' , 'thumb')  }}" loading="lazy" decoding="async" alt="{{ $children->name }} image 1">
        </a>
        <div class="card-body">
            <a href=" {{ $children->front_url }} ">
                <h2 class="card-title"><b> {{ $children->name }}</b> </h2>
            </a>
        </div>
    </div>
</div>
