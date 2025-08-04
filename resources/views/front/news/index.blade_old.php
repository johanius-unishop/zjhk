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