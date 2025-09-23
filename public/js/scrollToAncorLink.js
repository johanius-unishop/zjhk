document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (event) {
            event.preventDefault(); // предотвращаем стандартное поведение браузера

            const targetId = this.getAttribute("href"); // получаем ID цели
            const targetElement = document.querySelector(targetId); // находим целевой элемент
            if (!targetElement) return; // проверяем существование элемента

            const HEADER_FULL_HEIGHT = 140;
            const HEADER_SCROLL_HEIGHT = 64;
            let scrollOffset = 0; // начальное значение смещения

            // Для начала смотрим, активирована ли фиксация хидера (_scroll)
            if (bottomHeader && bottomHeader.classList.contains("_scroll")) {
                scrollOffset = HEADER_SCROLL_HEIGHT;
            }
            else{
                scrollOffset = HEADER_FULL_HEIGHT;
            }

            // Итоговая позиция должна учитывать смещение
            const targetPosition = targetElement.offsetTop - scrollOffset;

            // Переводим страницу в нужное положение
            window.scrollTo({
                top: targetPosition,
                behavior: "smooth", // Гладкий скролл
            });
        });
    });
    console.log("Scroll to Link has been connected...");
});
