<header class="py-0 bg-white">
    <nav class="py-0 navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row w-100">
                <!-- Первая строка -->
                <div class="col-12 d-flex justify-content-between align-items-center py-2 border-bottom">
                    <!-- Телефон -->
                    <div class="d-flex align-items-center">
                        <a href="#" class="mr-0">
                        <i class="fa-solid fa-phone mr-2"></i>
                        <div class="dropdown">
                            <button class="btn btn-link dropdown-toggle" type="button" id="phoneDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $company['phone'] }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="phoneDropdown">
                                <a class="dropdown-item" href="#">{{ $company['phone_2'] }}</a>
                                <a class="dropdown-item" href="#">{{ $company['phone_3'] }}</a>
                            </div>
                        </div>
                        <a href="mailto:{{ $company['email'] }}" class="ml-3">{{ $company['email'] }}</a>
                    </div>
                    <!-- Меню -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">О компании</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="customersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Покупателям
                            </a>
                            <div class="dropdown-menu" aria-labelledby="customersDropdown">
                                <a class="dropdown-item" href="#">Акции</a>
                                <a class="dropdown-item" href="#">Доставка</a>
                                <a class="dropdown-item" href="#">Оплата</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="usefulDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Полезное
                            </a>
                            <div class="dropdown-menu" aria-labelledby="usefulDropdown">
                                <a class="dropdown-item" href="#">FAQ</a>
                                <a class="dropdown-item" href="#">Статьи</a>
                                <a class="dropdown-item" href="#">Отзывы</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="helpDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Помощь
                            </a>
                            <div class="dropdown-menu" aria-labelledby="helpDropdown">
                                <a class="dropdown-item" href="#">Контактная форма</a>
                                <a class="dropdown-item" href="#">Обратная связь</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
                    
                    <!-- Вторая строка -->
                    <div class="col-12 d-flex justify-content-between align-items-center py-2">
                        <!-- Логотип, название, девиз -->
                        <div class="d-flex align-items-center">
                            <img src="/path/to/logo.png" alt="Логотип" width="50" height="50" class="mr-3">
                            <h1 class="mb-0 mr-3">Название компании</h1>
                            <span class="font-weight-bold text-primary">Девиз компании</span>
                        </div>
                        
                        <!-- Кнопка Каталог, поиск -->
                        <form class="input-group mb-0 mr-3">
                            <input type="search" class="form-control" placeholder="Поиск по каталогу">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit">Найти</button>
                            </div>
                        </form>
                        
                        <!-- Пиктограммы с подписями -->
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3"><i class="fas fa-shopping-cart"></i><br>Корзина</a>
                            <a href="#" class="mr-3"><i class="far fa-heart"></i><br>Избранное</a>
                            <a href="#" class="mr-3"><i class="fas fa-user-circle"></i><br>Войти</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>