window.addEventListener('DOMContentLoaded', (event) => {
    const downloadButton = document.getElementById('download-ics');
    const form = document.getElementById('event-data');
    const sendMail = document.getElementById('send-email');
    const email = document.getElementById('email-address');

    sendMail.addEventListener('click', (e) => {
        e.preventDefault();
        sendRequest(true);
    });

    downloadButton.addEventListener('click', (e) => {
        e.preventDefault();
        sendRequest(false);
    });

    function sendRequest(sendEmail) {

        let formData = new FormData(form);

        if (sendEmail) {
            formData.append('send_email', true);
            formData.append('email_address', email.value);
        }

        let title = form.querySelector('input[name="summary"]').value;
        let sanitizedTitle = title.toLowerCase()
            .replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'download');
        xhr.responseType = 'blob';
        xhr.onload = function () {
            if (xhr.status === 200) {

                if (this.response.size > 0) {

                    let title = 'invite';

                    if (sanitizedTitle.length > 0) {
                        title = sanitizedTitle;
                    }

                    if (!sendEmail) {
                        var blob = new Blob([this.response], {type: 'text/calendar'});
                        let a = document.createElement("a");
                        a.style = "display: none";
                        document.body.appendChild(a);
                        let url = window.URL.createObjectURL(blob);
                        a.href = url;
                        a.download = title + '.ics';
                        a.click();
                        window.URL.revokeObjectURL(url);
                        a.remove();
                    }

                }
            }
        };
        xhr.send(formData);
    }
});
