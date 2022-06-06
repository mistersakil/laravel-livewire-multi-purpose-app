
window.addEventListener('DOMContentLoaded', function () {
    /* Event listener to create new user on modal window */
    window.addEventListener('add_modal_event', event => {
        let add_modal = new bootstrap.Modal(document.querySelector('#add_modal'));
        add_modal.show();
    })

    /* Event lister after creating new user and display toast message */
    window.addEventListener('success_toast_event', event => {
        var success_toast = document.getElementById('success_toast')
        var toast = new bootstrap.Toast(success_toast)
        toast.show()
    })

}, false);

