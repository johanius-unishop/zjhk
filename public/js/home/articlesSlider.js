document.addEventListener("DOMContentLoaded", () => {
    const articles = new Swiper(".articles-slider", {
        modules: [EffectFade, Navigation],
        navigation: {
            nextEl: ".swiper-button-next.articles",
            prevEl: ".swiper-button-prev.articles",
        },
        loop: false,
        breakpoints: {
            360: {
                slidesPerView: 2,
                spaceBetween: 8,
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
