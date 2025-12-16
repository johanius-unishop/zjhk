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
                <p>В зависимости от условий эксплуатации используются металлические или <a href="{{ route('category.show', ['slug' => 'plastikovye-salniki']) }}">пластиковые</a> сальники.</p>
                <p>Обратите внимание на указанные <em>типоразмеры</em> и их отношение к межосевому расстоянию крепежных
                    винтов «x — y», которые являются общими для вставок и корпусов данного <em>типоразмера</em>.</p>
                <p>Знание <em>типоразмера</em> или умение его определить является неотъемлемой частью успешного подбора
                    компонентов промышленных прямоугольных разъемов и обеспечивает их совместимость.</p>
                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

                <div class="element-container">
                    <div class="element-column-75">
                        <div class="element-column-gap">
                            <table class="element-table">
                                <thead>
                                    <tr class="table-header">
                                        <th class="table-header-cell">
                                            <span class="data-table-header-text">Типоразмер</span>
                                        </th>
                                        <th class="table-header-cell">
                                            <span class="data-table-header-text">Другое обозначение</span>
                                        </th>
                                        <th class="table-header-cell">
                                            <span class="data-table-header-text">Расстояние между центрами
                                                крепежных винтов (x - y) , мм</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    3A </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    21.21 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    ( 21 x 21 ) ** </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    10A </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    49.16 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    49,5 x 16 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    16A </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    66.16 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    66 x 16 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    32A </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    66.40 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    66 x 16 (2 вставки) </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    6B </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    44.27 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    44 x 27 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    10B </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    57.27 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    57 x 27 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    16B </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    77.27 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    77,5 x 27 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    24B </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    104.27 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    104 x 27 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    32B </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    77.62 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    77,5 x 27 (2 вставки) </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    48B </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    104.62 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    104 x 27 (2 вставки) </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    HC </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    32.13 </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    32 x 13 </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" rowspan="" class="" id="">
                                            <div class="td-content-wrapper">
                                                <div class="td-content">
                                                    ** Размеры относятся к размеру поперечного сечения
                                                    контактной вставки, так как невозможно определить расстояние
                                                    между центрами крепежных винтов, поскольку все контактные
                                                    вставки типоразмера 3A (21,21) оснащены одним крепежным
                                                    винтом. </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="elementor-column-25">
                        <div class="element-column-gap">
                            <div>
                                <img loading="lazy" decoding="async" max-height="100%" width="auto"
                                    object-fit="cover"; src="https://kevtek.ru/wp-content/uploads/size.png"
                                    class="attachment-large size-large wp-image-28607" alt="Изображение"
                                    srcset="https://kevtek.ru/wp-content/uploads/size.png 347w, https://kevtek.ru/wp-content/uploads/size-300x640.png 300w, https://kevtek.ru/wp-content/uploads/size-64x136.png 64w, https://kevtek.ru/wp-content/uploads/size-141x300.png 141w"
                                    sizes="(max-width: 347px) 100vw, 347px" title="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider">
                    <span class="divider-separator">
                    </span>
                </div>

            </div>
        </div>
    </section>
</main>
