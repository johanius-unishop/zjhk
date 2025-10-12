<li class="header__actions-item">
    <span style="@if($favoriteCount > 0) display:none; @else display:inline-block; @endif">{{ $favoriteCount }}</span>
    <a href="#">
        <img src="{{ asset('images/icons/bookmark.svg') }}" alt="Избранное">
        <span>Избранное</span>
    </a>
</li>
