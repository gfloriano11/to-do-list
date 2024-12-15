const form = document.querySelector('.edit_task');
const body = document.querySelector('body');
const titleContainer = document.querySelector('.title_container');
const principal = document.querySelector('.principal');
const cancelButton = document.querySelector('.cancel_button');

cancelButton.addEventListener('click', () => {
    form.classList.add('hide');
    form.classList.remove('central');
    titleContainer.classList.remove('opacidade');
    principal.classList.remove('opacidade');
})

const pencils = document.querySelectorAll('.pencil');

pencils.forEach((pencil) => {

    pencil.addEventListener('click', () => {

        form.classList.remove('hide');
        form.classList.add('central');
        titleContainer.classList.add('opacidade');
        principal.classList.add('opacidade');
    });

});