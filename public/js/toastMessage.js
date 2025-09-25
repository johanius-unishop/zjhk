document.addEventListener("DOMContentLoaded", () => {
    window.dispatchEvent(
        new CustomEvent("toast", {
            detail: {
                message: "{{ session('toast_message') }}",
                notify: "{{ session('toast_type') }}",
            },
        })
    );
});
