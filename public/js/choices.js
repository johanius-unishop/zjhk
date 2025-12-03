document.addEventListener("DOMContentLoaded", () => {
    initChoices();

    document.addEventListener("livewire:init", () => {
        Livewire.on("update-docs", (event) => {
            refreshChoices();
        });
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

function refreshChoices() {

    const selectElements = document.querySelectorAll(".filter__select");
    selectElements.forEach((selectElement) => {
        if (selectElement._choices) {
            selectElement._choices.refresh(true, false); // Читаем опции и не выбираем автоматически первый элемент
        }
    });
}
