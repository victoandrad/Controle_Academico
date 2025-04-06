document.addEventListener('DOMContentLoaded', function () {
    const toastEl = document.getElementById('toastMessage');
    if (toastEl) {
        const toast = new bootstrap.Toast(toastEl, { delay: 4000 });
        toast.show();
    }

    const errorToasts = document.querySelectorAll('[id^="toastError"]');
    errorToasts.forEach(el => {
        const toast = new bootstrap.Toast(el, { delay: 5000 });
        toast.show();
    });
});
