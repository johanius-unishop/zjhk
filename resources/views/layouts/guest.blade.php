<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('login') }}" class="text-gray-700 px-3 py-2 rounded-md font-medium hover:text-gray-900 hover:bg-gray-100 transition duration-200">Вход</a>
                            <a href="{{ route('register') }}" class="text-gray-700 px-3 py-2 rounded-md font-medium hover:text-gray-900 hover:bg-gray-100 transition duration-200">Регистрация</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
