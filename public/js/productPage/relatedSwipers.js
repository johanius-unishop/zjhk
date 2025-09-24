document.addEventListener("DOMContentLoaded", () => {
    document
        .querySelectorAll("[class^=opt-slider], [class*=opt-slider]")
        .forEach((el) => {
            // Парсим индекс из класса элемента (например, opt-slider1 → 1)
            const index =
                Array.from(el.classList)
                    .filter((cls) => cls.startsWith("opt-slider"))
                    .map((cls) => cls.match(/\d+/))
                    .flat()[0]?.[0] || "";
            // Формируем классы кнопок вперед и назад для текущего слайда
            const nextButtonClass = `.swiper-button-next.opt${index}`;
            const prevButtonClass = `.swiper-button-prev.opt${index}`;
            // Инициализируем Swiper
            new Swiper(el, {
                modules: [EffectFade, Navigation],
                navigation: {
                    nextEl: nextButtonClass,
                    prevEl: prevButtonClass,
                },
                loop: false,
                breakpoints: {
                    360: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    680: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                },
            });
        });
});
