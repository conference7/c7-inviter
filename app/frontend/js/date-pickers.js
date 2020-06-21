window.addEventListener('DOMContentLoaded', (event) => {
    flatpickr(".datepicker", {
        enableTime: true,
        dateFormat: 'd/m/Y H:i',
        time_24hr: true
    });
});