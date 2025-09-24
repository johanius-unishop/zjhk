document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('a[href^="#"]:not(.no-scroll-to-handle)').forEach((anchor) => { // Исключаем элементы с классом no-scroll-to-handle
        anchor.addEventListener("click", function(event) {
            event.preventDefault(); // Предотвращаем стандартное поведение браузера

            const targetId = this.getAttribute("href"); // Получаем ID цели
            const targetElement = document.querySelector(targetId); // Находим целевой элемент
            if (!targetElement) return; // Проверяем наличие элемента

            const HEADER_FULL_HEIGHT = 110;
            const HEADER_SCROLL_HEIGHT = 64;
            let scrollOffset = 0; // Начальное значение смещения

            const bottomHeader = document.querySelector(".header__bottom");
            // Проверяем, активирован ли режим фиксации хедера (_scroll)
            if (bottomHeader && bottomHeader.classList.contains("_scroll")) {
                scrollOffset = HEADER_SCROLL_HEIGHT;
            } else {
                scrollOffset = HEADER_FULL_HEIGHT;
            }

            // Рассчитываем позицию с учетом смещения
            const targetPosition = targetElement.offsetTop - scrollOffset;

            // Перемещаемся на нужную позицию
            window.scrollTo({
                top: targetPosition,
                behavior: "smooth", // Плавный скролл
            });
        });
    });
});
