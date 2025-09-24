document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper(".thumbSwiper", {
        loop: false,
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
        slidesPerView: 4,
        breakpoints: {
            992: {
                slidesPerView: 5,
                direction: "vertical",
            },
        },
    });

    const swiper2 = new Swiper(".photoSwiper", {
        modules: [EffectFade, Navigation, Thumbs, Pagination],
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next.prod",
            prevEl: ".swiper-button-prev.prod",
        },
        thumbs: {
            swiper: swiper,
        },
        pagination: {
            el: ".swiper-pagination-thumb",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + "</span>";
            },
        },
        breakpoints: {
            360: {
                pagination: {
                    enabled: true,
                },
            },
            575: {
                pagination: {
                    enabled: false,
                },
            },
        },
    });
});
