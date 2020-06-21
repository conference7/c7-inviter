window.addEventListener('DOMContentLoaded', (event) => {
    const form = document.getElementById('event-data');
    const invite = document.getElementById('invite');
    form.addEventListener('keyup', syncData);
    form.addEventListener('change', syncData);

    function syncData(e) {
        let source = e.target;

        if (source.dataset.source !== '') {
            let target = invite.querySelector('[data-target="' + source.dataset.source + '"]');

            // Target exists.
            if (target !== null) {

                // Source is not empty.
                if (source.value !== '') {

                    let newValue = source.value;

                    // Combine start/end
                    if (source.dataset.source === 'when') {
                        let date_start = form.querySelector('[name="date_start"]');
                        let date_end = form.querySelector('[name="date_end"]');

                        newValue = date_start.value + ' - ' + date_end.value;
                    }

                    target.innerHTML = newValue;
                    target.classList.remove('empty');
                } else {
                    target.classList.add('empty');
                }
            }
        }
    }
});
