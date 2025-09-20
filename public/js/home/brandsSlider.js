document.addEventListener("DOMContentLoaded", () => {
    const brands = new Swiper(".brands-slider", {
        modules: [EffectFade, Navigation],
        navigation: {
            nextEl: ".swiper-button-next.brands",
            prevEl: ".swiper-button-prev.brands",
        },
        loop: false,
        breakpoints: {
            360: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            680: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 20,
            },
        },
    });
});
