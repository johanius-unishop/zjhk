document.addEventListener("DOMContentLoaded", () => {
    initChoices();

    document.addEventListener("livewire:init", () => {
        Livewire.on('update-docs', (event) => {
            initChoices();

        });
    });
});

function initChoices() {
    const selectElements = document.querySelectorAll(".filter__select");

    selectElements.forEach((el) => {
        const choices = new Choices(el, {
            searchEnabled: false,
            itemSelectText: true,
            position: "bottom",
        });
    });
}


