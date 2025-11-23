document.addEventListener("DOMContentLoaded", () => {
    const docs = new Swiper(".documents-slider", {
        modules: [EffectFade, Navigation],
        navigation: {
            nextEl: ".swiper-button-next.documents",
            prevEl: ".swiper-button-prev.documents",
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
