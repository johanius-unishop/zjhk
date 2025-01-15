<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    @livewireStyles
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen min-w-screen">

@include('layouts.header')

@yield('content')

@include('layouts.footer')
@livewireScripts

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