<main>
    <section class="article-page">
        <div class="article-page__container container">
            @include('components.article-page.breadcrumbs')
            <div class="article-page__content">
                <h2 class="article-page__title">{{ $article->name }}</h2>
                <h2 class="article-page__title">Совместимость компонентов разъема по типоразмеру.</h2>
                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>
                <p>Промышленные прямоугольные разъемы обеспечивают степень защиты IP65 в собранном состоянии.</p>
                <p>Чтобы полностью собрать комплект промышленного прямоугольного разъема, кроме соответствующих кожухов
                    и контактных вставок, потребуется смонтировать один или несколько сальников (кабельных вводов). В
                    отечественной терминологии используется несколько названий для обозначения сальников, их могут
                    называть кабельными вводами, гермовводами и т.д. Независимо от используемого термина, речь идет об
                    одном и том же.</p>
                <h5 class="article-page__h5">Сальники (гермовводы), используемые в промышленных разъемах</h5>
                <p>Для ввода кабеля в кожух прямоугольного промышленного разъема, чтобы обеспечить защиту контактов от
                    пыли, грязи и влаги, а также защитить внешнюю изоляцию кабеля от повреждения о края кожуха
                    используют специальные сальники (гермовводы).</p>
                <h5 class="article-page__h5">Назначение и применение сальников</h5>
                <ol class="article-page__ol-decimal">
                    <li>защита от механических повреждений слоя внешней изоляции кабеля, вводимого в кожух
                        прямоугольного промышленного разъема при возможно вибрации во время работы;</li>
                    <li>герметизация кожуха прямоугольного промышленного разъема от проникновения внутрь влаги, грязи и
                        пыли;</li>
                    <li>надёжная фиксация кабеля после введения его в кожух и выполнения подсоединения к контактной
                        вставке.</li>
                </ol>
                <p>Сальники (гермоводы) используются при монтаже как силовых кабелей, так и сигнальных линий.</p>
                <p>В зависимости от условий эксплуатации используются <a style="color: #3182ce;"
                        href="{{ route('category.show', ['slug' => 'metalliceskie-salniki']) }}">металлические</a> или
                    <a style="color: #3182ce;"
                        href="{{ route('category.show', ['slug' => 'plastikovye-salniki']) }}">пластиковые сальники</a>.
                </p>
                <p>Каждый кожух прямоугольного промышленного разъема, подразумевающий ввод кабеля, имеет одно или
                    несколько отверстий с нарезанной резьбой.</p>
                <p>Чаще всего на кожухах нарезают два типа резьбы PG (дюймовая резьба) или M (метрическая резьба).</p>
                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

                <h5 class="article-page__h5">Таблица соответствия между PG и M резьбами</h5>

                <div class="element-container">
                    <div class="element-column-50">
                        <div class="element-column-gap">
                            <table style="width: 100%;" class="element-table">
                                <thead>
                                    <tr class="table-header">
                                        <th class="table-header-cell">
                                            <span class="data-table-header-text">PG (дюймовая резьба)</span>
                                        </th>
                                        <th class="table-header-cell">
                                            <span class="data-table-header-text">M (метрическая резьба)</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG11 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M20 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG13.5 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M20 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG16 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M20 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG21 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M25 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG29 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M32 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG36 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M40 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG42 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M50 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    PG48 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    M63 </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="element-column-50">
                        <div class="element-column-gap">
                            <div class="article-page__img-item full-width fix-height">
                                @if ($acceptsWebP)
                                    <img src="{{ asset('images/content/articles/thread_matching.webp') }}"
                                        alt="Взаимозаменяемость размеров резьбы PG и M" loading="lazy">
                                @else
                                    <img src="{{ asset('images/content/vendors/thread_matching.jpg') }}"
                                        alt="Взаимозаменяемость размеров резьбы PG и M" loading="lazy">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

                <h5 class="article-page__h5">Подбор сальника в зависимости от диаметра кабеля</h5>
                <div class="article-page__img-item full-width">
                    @if ($acceptsWebP)
                        <img src="{{ asset('images/content/articles/dependence_of_size_cable_gland_on_cable_diameter.webp') }}"
                            alt="Подбор кабельного ввода по диаметру кабеля" loading="lazy">
                    @else
                        <img src="{{ asset('images/content/vendors/dependence_of_size_cable_gland_on_cable_diameter.jpg') }}"
                            alt="Подбор кабельного ввода по диаметру кабеля" loading="lazy">
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
