@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <h1>Оставьте отзыв и оценку на {{ $product->name }}</h1>
    <form method="POST" action="{{ route('reviews.store') }}">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}"/>
        <label for="rating">Оценка:</label><br />
        <select name="rating" required>
            <option value="">Выберите оценку...</option>
            <option value="1">1 звезда</option>
            <option value="2">2 звезды</option>
            <option value="3">3 звезды</option>
            <option value="4">4 звезды</option>
            <option value="5">5 звезд</option>
        </select><br /><br />
        <label for="title">Заголовок отзыва:</label><br />
        <input type="text" name="review_title"/><br /><br />
        <label for="review_text">Текст отзыва:</label><br />
        <textarea name="review_text"></textarea><br /><br />
        <button type="submit">Отправить отзыв</button>
    </form>
</div>
@endsection
