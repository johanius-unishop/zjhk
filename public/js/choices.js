document.addEventListener("DOMContentLoaded", () => {
    initChoices();
    console.log('инициализация');

    // Подписываемся на событие обновления компонента
    window.addEventListener('wired:update', () => {
        initChoices();
        console.log('обновление');
    });
});

function initChoices() {
    const selectElements = document.querySelectorAll(".filter__select");

    selectElements.forEach((el) => {
        const choices = new Choices(el, {
            searchEnabled: false,
            itemSelectText: false,
            position: "bottom",
        });
    });
}
