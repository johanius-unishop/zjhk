

document.addEventListener("DOMContentLoaded", () => {
    const toastMessage = "{{ session('toast_message') }}";
    const toastType = "{{ session('toast_type') }}"; // Определяйте типы уведомлений: success, error, info и др.

    if (toastMessage && toastType) {
        Swal.fire({
            position: 'top-end',
            type: toastType,
            title: toastMessage,
            showConfirmButton: false,
            timer: 3000
        });
    }
});
