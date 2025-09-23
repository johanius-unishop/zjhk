document.addEventListener("DOMContentLoaded", () => {
    // Обработчик события клик на внутренние ссылки
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (event) {
            event.preventDefault(); // предотвращаем стандартное поведение браузера

            const targetId = this.getAttribute("href"); // получаем ID цели
            const targetElement = document.querySelector(targetId); // находим целевой элемент
            if (!targetElement) return; // проверяем существование элемента

            let scrollOffset = 0; // начальное значение смещения

            // Проверяем наличие класса "_scroll" у нижнего слоя хидера
            const bottomHeader = document.querySelector(".header__bottom");
            if (bottomHeader && bottomHeader.classList.contains("_scroll")) {
                scrollOffset = bottomHeader.offsetHeight; // высота нижней части хидера
            }

            // Рассчитываем итоговую позицию с учетом смещения
            const targetPosition = targetElement.offsetTop - scrollOffset;

            // Программно выполняем плавный скроллинг
            window.scrollTo({
                top: targetPosition,
                behavior: "smooth", // гладкий скролл
            });
        });
    });
    console.log("Scroll to Link has been connected...");
});
