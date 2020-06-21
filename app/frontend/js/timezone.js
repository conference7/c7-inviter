window.addEventListener('DOMContentLoaded', (event) => {
    const form = document.getElementById('event-data');
    const timezoneElem = document.querySelector('.current-timezone');
    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    const offsetElem = form.querySelector('[name="utc_offset_minutes"]');

    let offset_in_minutes = new Date().getTimezoneOffset();

    // Offset in hours
    let offset = offset_in_minutes / 60;

    let opposite_offset = offset * -1;

    let output = timezone + ' (UTC' + (opposite_offset <= 0 ? "" : "+") + opposite_offset + ')';

    // Set timezone
    timezoneElem.innerHTML = output;

    // Set offset element
    offsetElem.value = offset_in_minutes * -1;

    // Reset timezone to browser default.
    form.addEventListener('click', e => {
        if (e.target.dataset.action === 'reset-timezone') {
            e.preventDefault();
            timezoneElem.innerHTML = output;

            // Set offset element
            offsetElem.value = offset_in_minutes;

        }
    });


});