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
        const currentValue = selectElement.value;

        // Создаём новый экземпляр Choices.js
        selectElement._choices = new Choices(selectElement, {
            searchEnabled: false,
            itemSelectText: false,
            position: "bottom",
        });

        selectElement.addEventListener('change', function(event) {
            const fieldName = event.target.name;
            const selectedValue = event.target.value;
            const payload = [fieldName, selectedValue];

            console.log(payload);
            Livewire.dispatch('update-value', { payload });
        });
    });
}


