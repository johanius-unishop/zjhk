document.addEventListener("DOMContentLoaded", () => {
    const sliderNews = new Swiper(".news-slider", {
        modules: [EffectFade, Navigation],
        navigation: {
            nextEl: ".swiper-button-next.news",
            prevEl: ".swiper-button-prev.news",
        },
        loop: true,
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
