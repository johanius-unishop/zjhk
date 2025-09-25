
document.addEventListener("DOMContentLoaded", () => {
    const toastMessage = "Ваша учетная запись удалена!";
    const toastType = "warning"; // Определяйте типы уведомлений: success, error, info и др.

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
