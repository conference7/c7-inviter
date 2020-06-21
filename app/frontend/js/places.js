window.addEventListener('DOMContentLoaded', (event) => {
    const form = document.getElementById('event-data');
    const locationInput = form.querySelector('[name="location"]');
    const autocomplete = new google.maps.places.Autocomplete(locationInput);
    const timezone = document.querySelector('.current-timezone');
    const offsetElem = form.querySelector('[name="utc_offset_minutes"]');

    console.log(Intl.DateTimeFormat());

    autocomplete.addListener('place_changed', () => {

        let place = autocomplete.getPlace();
        let offsetInMinutes = place.utc_offset_minutes;
        if (offsetInMinutes !== undefined && offsetInMinutes !== null) {

            let offset = offsetInMinutes / 60;
            timezone.innerHTML = 'Picked location (UTC' + (offset <= 0 ? "" : "+") + offset + ') (<a href="#" data-action="reset-timezone">reset</a>)';

            // Set offset
            offsetElem.value = offsetInMinutes * -1;

            let event = new Event('change', {
                    'bubbles': true
                }
            );
            locationInput.dispatchEvent(event);

        }
    });
});