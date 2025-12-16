<main>
    <section class="article-page">
        <div class="article-page__container container">
            @include('components.article-page.breadcrumbs')
            <div class="article-page__content">
                <h2 class="article-page__title">{{ $article->name }}</h2>
                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>
                <h3 class="article-page__h3">Винтовые клеммы</h3>
                <div class="element-container">
                    <div class="element-column-25">
                        <div class="element-column-wrapper">
                            <div class="element-cell element-cell-image">
                                @if ($acceptsWebP)
                                    <img src="{{ asset('images/content/articles/screw_terminal.webp') }}"
                                        alt="Винтовое подключение в разрезе" loading="lazy">
                                @else
                                    <img src="{{ asset('images/content/articles/screw_terminal.jpg') }}"
                                        alt="Винтовое подключение в разрезе" loading="lazy">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="element-column-75">
                        <div>
                            <div>
                                <h5 class="article-page__h5">Преимущества</h5>
                            </div>
                            <div>
                                <ul class="article-page__ul-disc">
                                    <li>Простое и интуитивно понятное соединение</li>
                                    <li>Монтаж можно произвести на месте без без каких-либо специальных инструментов,
                                        достаточно иметь отверткуМонтаж можно произвести на месте без без каких-либо
                                        специальных инструментов, достаточно иметь отвертку</li>
                                    <li>Может использоваться для многожильных проводов клеммы</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p><strong>Винтовые клеммы</strong> являются распространенным типом клеммных соединений в промышленных
                    прямоугольных разъемах. Они широко используются в электрических цепях для соединения проводов и
                    кабелей. Винтовые клеммы обеспечивают надежное соединение, которое может выдерживать высокие токи и
                    напряжения. Кроме того, они легко устанавливаются и могут быть быстро заменены при необходимости.
                    Недостатком винтовых клемм является то, что они могут требовать больше времени и усилий для
                    установки, чем другие типы клеммных соединений, таких как пружинные клеммы. Однако, в целом,
                    винтовые клеммы являются надежным и простым в использовании решением для соединения проводов в
                    электрических цепях.</p>
                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

                <h3 class="article-page__h3">Обжимные контакты</h3>
                <div class="element-container">
                    <div class="element-column-25">
                        <div class="element-column-wrapper">
                            <div class="element-cell element-cell-image">
                                @if ($acceptsWebP)
                                    <img src="{{ asset('images/content/articles/crimp_terminal.webp') }}"
                                        alt="Обжимное подключение в разрезе" loading="lazy">
                                @else
                                    <img src="{{ asset('images/content/articles/crimp_terminal.jpg') }}"
                                        alt="Обжимное подключение в разрезе" loading="lazy">
                                @endif
                                @if ($acceptsWebP)
                                    <img src="{{ asset('images/content/articles/crimp_terminal_HE_HEE.webp') }}"
                                        alt="Обжимное подключение в разрезе в сериях HE, HEE" loading="lazy">
                                @else
                                    <img src="{{ asset('images/content/articles/crimp_terminal_HE_HEE.jpg') }}"
                                        alt="Обжимное подключение в разрезе в сериях HE, HEE" loading="lazy">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="element-column-75">
                        <div>
                            <div>
                                <h5 class="article-page__h5">Преимущества</h5>
                            </div>
                            <div>
                                <ul class="article-page__ul-disc">
                                    <li>Подходят для быстрого монтажа проводки, идеальны для предварительной сборки
                                        разъемов с большим количеством контактов</li>
                                    <li>Используя подходящие инструменты для обжима, можно добиться стабильного качества
                                        обжима и отличной коррозионной стойкости, почти сравнимой с холодной
                                        сваркой.Используя подходящие инструменты для обжима, можно добиться стабильного
                                        качества обжима и отличной коррозионной стойкости, почти сравнимой с холодной
                                        сваркой</li>
                                    <li>Из-за высокой плотности контактов требуется очень мало места</li>
                                    <li>Оптимальная стоимость соединенияОптимальная стоимость соединения</li>
                                    <li>Устойчивость к вибрации</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Промышленные прямоугольные разъемы с <strong>обжимными контактами</strong> широко
                    используются в электрических цепях для соединения проводов и кабелей. Обжимные контакты обеспечивают
                    надежное соединение, которое может выдерживать высокие токи и напряжения. Это обеспечивает
                    стабильность работы электрической цепи. Одним из основных преимуществ обжимных контактов является их
                    быстрый и простой монтаж. Они также обеспечивают более экономичное решение по сравнению с другими
                    типами контактов. Кроме того, обжимные контакты обладают высокой устойчивостью к вибрации и
                    механическим воздействиям, что делает их идеальным выбором для использования в условиях высоких
                    нагрузок и требований к надежности.</p>

                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

                <h3 class="article-page__h3">Пружинные клеммы</h3>
                <div class="element-container">
                    <div class="element-column-25">
                        <div class="element-column-wrapper">
                            <div class="element-cell element-cell-image">
                                @if ($acceptsWebP)
                                    <img src="{{ asset('images/content/articles/cage-clamp_terminal.webp') }}"
                                        alt="Подключение Cage-Clamp в разрезе" loading="lazy">
                                @else
                                    <img src="{{ asset('images/content/articles/cage-clamp_terminal.jpg') }}"
                                        alt="Подключение Cage-Clamp в разрезе" loading="lazy">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="element-column-75">
                        <div>
                            <div>
                                <h5 class="article-page__h5">Преимущества</h5>
                            </div>
                            <div>
                                <ul class="article-page__ul-disc">
                                    <li>Этот метод подключения требует очень небольшой подготовки провода и специальных
                                        инструментов, что приводит к низкой стоимости установки и высокой степени
                                        механической безопасности</li>
                                    <li>Простота подключения. Проводник и отвертка находятся в одной плоскости.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p><strong>Пружинные клеммы</strong> в промышленных прямоугольных разъемах — это удобное и надежное
                    решение для быстрого подключения проводов. Они применяются во многих отраслях промышленности, таких
                    как электроэнергетика, автоматизация и транспорт. Преимущества использования пружинных клемм
                    включают простой монтаж, высокую надежность соединения и возможность быстрой замены провода без
                    необходимости распайки. Кроме того, они обеспечивают высокую степень защиты от вибрации и
                    механического напряжения, что делает их идеальным выбором для приложений с высокой нагрузкой и
                    надежностью</p>

                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

                <h3 class="article-page__h3">Аксиальные винтовые клеммы</h3>
                <div class="element-container">
                    <div class="element-column-25">
                        <div class="element-column-wrapper">
                            <div class="element-cell element-cell-image">
                                @if ($acceptsWebP)
                                    <img src="{{ asset('images/content/articles/axial_screw_terminal.webp') }}"
                                        alt="Аксиальное винтовое подключение в разрезе" loading="lazy">
                                @else
                                    <img src="{{ asset('images/content/articles/axial_screw_terminal.jpg') }}"
                                        alt="Аксиальное винтовое подключение в разрезе" loading="lazy">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="element-column-75">
                        <div>
                            <div>
                                <h5 class="article-page__h5">Преимущества</h5>
                            </div>
                            <div>
                                <ul class="article-page__ul-disc">
                                    <li>Требуется меньше местаТребуется меньше места</li>
                                    <li>Простота в обращении</li>
                                    <li>Никаких специальных инструментов</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p><strong>Аксиальные винтовые клеммы</strong> — это один из типов электрических контактов, используемых
                    в промышленных прямоугольных разъемах. Они широко применяются в приложениях, где требуется высокая
                    надежность контакта и защита от вибрации и механических нагрузок. Клеммы легко монтируются и
                    обеспечивают надежное соединение проводов. Однако, установка клемм может требовать больше времени и
                    усилий, чем другие типы контактов, такие как пружинные или обжимные. В целом, аксиальные винтовые
                    клеммы — это надежный выбор для промышленных приложений, требующих высокой надежности контакта и
                    защиты от вибрации и механических нагрузок.</p>

                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>
            </div>
        </div>
    </section>
</main>
