
document.addEventListener("DOMContentLoaded", () => {
    const toastMessage = "Ваша учетная запись удалена!";
    const toastType = "info"; // Определяйте типы уведомлений: success, error, info и др.

    if (toastMessage && toastType) {
        Swal.fire({
            position: 'top-end',
            type: toastType,
            title: toastMessage,
            showConfirmButton: false,
            timer: 5000
        });
    }
});
