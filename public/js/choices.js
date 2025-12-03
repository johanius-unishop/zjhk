document.addEventListener("DOMContentLoaded", () => {
    initChoices();

    window.livewire.on('livewire:load', () => {
        initChoices();
    });

    window.livewire.hook('component.updated', (componentName, componentInstance) => {
        initChoices();
    });
});

function initChoices() {
    const selectElements = document.querySelectorAll('.filter__select');

    selectElements.forEach((el) => {
        const choices = new Choices(el, {
            searchEnabled: false,
            itemSelectText: false,
            position: "bottom",
        });
    });
}
