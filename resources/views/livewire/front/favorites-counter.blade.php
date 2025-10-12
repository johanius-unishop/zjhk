<li class="header__actions-item">
    <span style="@if($favoriteCount > 0) display:inline-block; @else display:none; @endif">{{ $favoriteCount }}</span>
    <a href="#">
        <img src="{{ asset('images/icons/bookmark.svg') }}" alt="Избранное">
        <span>Избранное</span>
    </a>
</li>
