@if (Breadcrumbs::exists())
    <div class="breadcrumbs">
        <ul class="breadcrumbs__list">

            @foreach (Breadcrumbs::generate('vendor.show', $vendor as $crumb)
                @if (!$loop->last)
                    <li><a href="{{ $crumb->url }}">{{ $crumb->name }}</a><img src="{{ asset('images/icons/arrow-right.svg') }}" alt="стрелка"></li>
                @else
                    <li><span>{{ $crumb->name }}</span></li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
