document.addEventListener("DOMContentLoaded", () => {
    initChoices();
    console.log('1');
    document.addEventListener("livewire:init", () => {
        Livewire.on('update-docs', (event) => {
            initChoices();
            console.log('2, 3...');
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


