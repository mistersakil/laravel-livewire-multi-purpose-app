
window.addEventListener('DOMContentLoaded', function () {
    /* Event listener to create new user on modal window */
    window.addEventListener('add_modal_event', event => {
        let add_modal = new bootstrap.Modal(document.querySelector('#add_modal'));
        add_modal.show();
    })

    /* Event lister after creating new user and display toast message */
    window.addEventListener('toast_event', event => {
        var toast_alert = document.getElementById('toast_alert')
        var toast = new bootstrap.Toast(toast_alert)
        toast.show()
    })

    /* Event listener to display user info on modal window */
    window.addEventListener('show_modal_event', event => {
        let show_modal = new bootstrap.Modal(document.querySelector('#show_modal'));
        show_modal.show();
    })

    /* Event listener to delete user using modal confirmation */
    let delete_modal_instance = null;
    window.addEventListener('delete_modal_event', event => {
        let delete_modal = document.querySelector('#delete_modal');
        if (event.detail.instance) {
            delete_modal_instance = bootstrap.Modal.getOrCreateInstance(delete_modal);
            delete_modal_instance.show();
        } else {
            delete_modal_instance.hide();
        }


    })


}, false);

