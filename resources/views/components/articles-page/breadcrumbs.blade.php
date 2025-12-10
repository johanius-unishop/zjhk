@if (Breadcrumbs::exists())
    <div class="breadcrumbs">
        <ul class="breadcrumbs__list">

            @foreach (Breadcrumbs::generate('articles.show', $articles) as $crumb)
                @if (!$loop->last)
                    <li><a href="{{ $crumb->url }}">{{ $crumb->title }}</a><img src="{{ asset('images/icons/arrow-right.svg') }}" alt="стрелка"></li>
                @else
                    <li><span>{{ $crumb->title }}</span></li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
