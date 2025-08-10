@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <h1>Оставьте отзыв и оценку на {{ $product->name }}</h1>
        <form method="POST" action="/reviews/store" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="advantages">Достоинства</label><br>
            <input type="text" name="advantages"><br>
            <label for="disadvantages">Недостатки</label><br>
            <input type="text" name="disadvantages"><br>
            <label for="review">Текст отзыва</label><br>
            <textarea name="review_text"></textarea><br>
            <label for="rating">Оценка:</label><br>
            <select name="rating">
                <option value="">-- Оцените товар --</option>
                <option value="1">1 звезда</option>
                <option value="2">2 звезды</option>
                <option value="3">3 звезды</option>
                <option value="4">4 звезды</option>
                <option value="5">5 звёзд</option>
            </select><br>
            <label for="images">Добавьте фотографии:</label><br>
            <input type="file" name="images[]" multiple accept="image/*"><br>
            <!-- Обратите внимание на атрибут multiple -->
            <button type="submit">Оставить отзыв</button>
        </form>
    </div>
@endsection
