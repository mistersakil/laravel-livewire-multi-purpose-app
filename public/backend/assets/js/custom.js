document.body.addEventListener('add_modal', event => {
    let add_modal = new bootstrap.Modal(document.querySelector('#add_modal'));
    add_modal.show();
})
