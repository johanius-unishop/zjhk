document.addEventListener("DOMContentLoaded", () => {


    document.addEventListener("livewire:init", () => {
        Livewire.on("update-docs", (event) => {
            initChoices();
        });
    });
});

function initChoices() {
    const selectElements = document.querySelectorAll(".filter__select");

    selectElements.forEach((selectElement) => {
        // Текущее выбранное значение
        const currentName = selectElement.name;
        console.log(currentName);


        // Создаём новый экземпляр Choices.js
        selectElement._choices = new Choices(selectElement, {
            searchEnabled: false,
            itemSelectText: false,
            position: "bottom",
        });

        // Устанавливаем выбранное значение
        selectElement._choices.setChoiceByValue(2);
    });
}


