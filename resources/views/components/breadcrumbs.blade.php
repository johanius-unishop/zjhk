<!-- Вывести хлебные крошки -->
<div class="breadcrumbs">
    <ul class="breadcrumbs__list">
        @foreach(Breadcrumbs::current() as $crumb)
            @if(!$loop->last)
                <li><a href="{{ $crumb->url }}">{{ $crumb->title }}</a><img src="/images/icons/arrow-right.svg" alt="стрелка"></li>
            @else
                <li><span>{{ $crumb->title }}</span></li>
            @endif
        @endforeach
    </ul>
</div>