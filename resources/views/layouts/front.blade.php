<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preload" as="style" href="http://94.198.218.15/build/assets/app-DbByt9ys.css" />
    <link rel="stylesheet" href="http://94.198.218.15/build/assets/app-DbByt9ys.css" />
</head>

<body class="flex flex-col min-h-screen min-w-screen">
    <header class="py-4 bg-white">
        <div class="container mx-auto px-4 flex items-center">
            <a href="#" class="mx-left text-2xl font-bold">LOGO</a>
            <div class="mx-auto flex items-center">
                <a href="#" class="mr-4 text-gray-600">+7 (812) 200-82-75</a>
                <a href="#" class="mr-4 text-gray-600">info@kevtek.ru</a>
                <a href="#" class="mr-4 text-gray-600">Покупателям</a>
                <a href="{{ route('faq.show') }}" class="mr-4 text-gray-600">Вопросы и ответы</a>
                <a href="#" class="mr-4 text-gray-600">Контакты</a>
            </div>
        </div>

        <nav class="py-4">
            <div class="container mx-auto px-4 flex items-center justify-between">
                <div class="flex w-screen">
                    <button class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-10тз mr-3 focus:outline-none focus:shadow-outline" type="button">
                        Каталог
                    </button>
                    <form  action="{{ route('search') }}" method="GET" id="formSearch" class="flex items-center w-full">
                        @csrf
                        <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-l py-2 px-4 block w-full appearance-none leading-normal" type="text" name="searchTerm"  placeholder="Поиск по каталогу">
                        <button  class="btn btn-search" title="Поиск"  type="submit">
                            искать
                        </button>
                    </form>
                </div>
                <div class="flex items-center ml-20">
                    <a href="{{ route('login') }}" class="mr-2 text-gray-600">Войти</a>
                    <a href="#" class="mr-2 text-gray-600">Заказы</a>
                    <a href="{{ route('favorite') }}" class="mr-2 text-gray-600">Избранное</a>
                    <a href="{{ route('cart') }}" class="text-gray-600">Корзина</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8 bg-gray-100">
        @yield('content')
    </main>

    <div class="bg-gray-200 py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <h4 class="text-gray-800 text-lg font-bold mb-4">Подпишитесь на рассылку</h4>
                    <p class="text-gray-600">
                        Подпишитесь на рассылку, чтобы быть в курсе новых поступлений и актуальных новостей на рынке промышленного оборудования!
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <form class="flex">
                        <input type="email" placeholder="Введите email" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-l py-2 px-4 block w-full appearance-none leading-normal">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r focus:outline-none focus:shadow-outline">
                            Подписаться
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between">
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-white text-lg font-bold mb-4">COMPANY LOGO</h4>
                    <p class="text-gray-400 bottom-0">
                        © 2024 ООО «КевТек»
                    </p>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-white text-lg font-bold mb-4">Компания</h4>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-400 hover:text-white">Наши преимущества</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Бренды</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-gray-400 hover:text-white">Новости</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Контакты</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-white text-lg font-bold mb-4">Покупателям</h4>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-400 hover:text-white">Каталог</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Полезные статьи</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Доставка и оплата</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Вопросы и ответы</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Обратная связь</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Возврат или обмен товара</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Гарантия</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Документация</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3">
                    <h4 class="text-white text-lg font-bold mb-4">Контакты</h4>
                    <ul class="list-none">
                        <li class="mb-2">
                            <a href="tel:+78122008275" class="text-gray-400 hover:text-white">
                                <i class="fas fa-phone mr-2"></i> +7 812 200-82-75
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@kevtek.ru" class="text-gray-400 hover:text-white">
                                <i class="fas fa-envelope mr-2"></i> info@kevtek.ru
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
