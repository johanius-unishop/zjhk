document.addEventListener("DOMContentLoaded", () => {


    document.addEventListener("livewire:init", () => {
        Livewire.on('update-docs', (event) => {


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


