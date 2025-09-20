document.addEventListener("DOMContentLoaded", () => {
    const swiper1 = new Swiper(".banner-slider", {
        modules: [EffectFade, Pagination, Autoplay],
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + "</span>";
            },
        },
    });
});
