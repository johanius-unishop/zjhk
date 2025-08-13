<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEO::generate() !!}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>1</title>
</head>

<body class="body">
    <div class="app__wrapper">
        @yield('header')
    </div>
</body>
</html>
{--
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
                    <form action="{{ route('search') }}" method="GET" id="formSearch" class="flex items-center w-full">
                        @csrf
                        <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-l py-2 px-4 block w-full appearance-none leading-normal" type="text" name="searchTerm" placeholder="Поиск по каталогу">
                        <button class="btn btn-search btn-secondary" title="Поиск" type="submit">
                            Поиск
                        </button>
                    </form>
                </div>
                <div class="flex items-center ml-20">
                    
                    <a href="{{ route('login') }}" class="mr-2 text-gray-600">Войти</a>
                    <a href="#" class="mr-2 text-gray-600">Заказы</a>
                    <a href="{{ route('favorite') }}" id="linkFavourites" class="mr-2 text-gray-600" data-count="{{ Cart::instance('favourites')->count() }}">Избранное <span class="count">{{ Cart::instance('favourites')->count()
                        }}</span></a>
                    <a href="{{ route('cart') }}" id="linkCart" class="text-gray-600 btn-cart " data-count="{{ Cart::instance('cart')->count()}}" title="Корзина">Корзина <span class="count">{{ Cart::instance('cart')->count() }}</span></a>
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
                        <li><a href="{{ route('vendors.index') }}" class="text-gray-400 hover:text-white">Бренды</a></li>
                        <li><a href="{{ route('news.index') }}" class="text-gray-400 hover:text-white">Новости</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Контакты</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-white text-lg font-bold mb-4">Покупателям</h4>
                    <ul class="list-none">
                        <li><a href="{{ route('catalog') }}" class="text-gray-400 hover:text-white">Каталог</a></li>
                        <li><a href="{{ route('article.index') }}" class="text-gray-400 hover:text-white">Доставка и оплата</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Доставка и оплата</a></li>
                        <li><a href="{{ route('faq.show') }}" class="text-gray-400 hover:text-white">Вопросы и ответы</a></li>
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
    --}
    @livewireScriptConfig 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // add in cart
        const linkCart = document.querySelector('#linkCart');
        // const linkCartMobile = document.querySelector('#linkCartMobile');
        // const cartMobile = document.querySelector('.mobile-cart');

        if (document.querySelector('.btn-add-in-cart') != null) {
            // alert(" dataset.product");
            const linkCart_count = linkCart.querySelector('.count');
            // const linkCartMobile_count = linkCartMobile.querySelector('.count');
            const btnsAddInCarts = document.querySelectorAll('.btn-add-in-cart');
            btnsAddInCarts.forEach(function(btn) {
                btn.onclick = function() {
                    alert(btn.dataset.product);
                    var count = linkCart.dataset.count;
                    const xhttp = new XMLHttpRequest();
                    if (!btn.classList.contains('in-cart')) {
                        xhttp.open("GET", "/cart/addToCart?q=" + btn.dataset.product);
                        xhttp.onload = () => {
                            if (xhttp.status == 200) { // если код ответа 200
                                console.log("Server response: 200 ", xhttp.responseText); // выводим полученный ответ на консоль браузера
                                linkCart.dataset.count = xhttp.responseText;
                                linkCart_count.innerHTML = xhttp.responseText;
                                // linkCartMobile.dataset.count = xhttp.responseText;
                                // linkCartMobile_count.innerHTML = xhttp.responseText;
                            } else { // иначе выводим текст статуса
                                console.log("Server response: 500 ", xhttp.statusText);
                            }
                        };
                        xhttp.send();
                        btn.classList.add('in-cart');
                        // btn.querySelector('.text').innerHTML = 'В корзине';
                        btn.innerHTML = 'В корзине';
                    }
                }
            });
        }


        // linkCart.dataset.count > 0 ? cartMobile.classList.add("show") : cartMobile.classList.remove("show");
        // const btnUpload = document.querySelector(".btn-upload");
        // if (null != btnUpload) {
        //     const $ = document.querySelector("#uploadFile");
        //     btnUpload.onclick = function() {
        //         $.click();
        //     };
        // }
        // favourites
        if (document.querySelectorAll('.btn-favourites') != null) {
            const linkFavourites = document.querySelector('#linkFavourites');
            const linkFavourites_count = linkFavourites.querySelector('.count');
            const btnsFavourites = document.querySelectorAll('.btn-favourites');
            btnsFavourites.forEach(function(btn) {
                btn.onclick = function() {
                    alert(btn.dataset.product);
                    const xhttp = new XMLHttpRequest();

                    var count = linkFavourites.dataset.count;
                    var new_count = 0;
                    if (btn.classList.contains('active')) {
                        btn.classList.remove('active');
                        xhttp.open("GET", "/cart/subToFavourite?q=" + btn.dataset.product);

                        xhttp.onload = () => {
                            if (xhttp.status == 200) { // если код ответа 200
                                console.log("Server response: 200 ", xhttp.responseText); // выводим полученный ответ на консоль браузера
                                new_count = xhttp.responseText;
                                linkFavourites.dataset.count = xhttp.responseText;
                                linkFavourites_count.innerHTML = xhttp.responseText;
                            } else { // иначе выводим текст статуса
                                console.log("Server response: 500 ", xhttp.statusText);
                            }
                        };
                        xhttp.send();

                    } else {
                        btn.classList.add('active');
                        // count = +count + 1;
                        btn.dataset.product;

                        xhttp.open("GET", "/cart/addToFavourite?q=" + btn.dataset.product);
                        xhttp.onload = () => {
                            if (xhttp.status == 200) { // если код ответа 200
                                console.log("Server response add: 200 ", xhttp.responseText); // выводим полученный ответ на консоль браузера
                                new_count = xhttp.responseText;
                                linkFavourites.dataset.count = xhttp.responseText;
                                linkFavourites_count.innerHTML = xhttp.responseText;
                            } else { // иначе выводим текст статуса
                                console.log("Server response addToFavourite: 500 ", xhttp.statusText);
                            }
                        };
                        xhttp.send();
                        btn.classList.add('in-cart');
                        // btn.querySelector('.text').innerHTML = 'В корзине';
                        btn.innerHTML = 'В избранном ';
                    }
                    // alert("Server response: 200 " +   new_count );

                }
            });
        }

    </script>
</body>
</html>
