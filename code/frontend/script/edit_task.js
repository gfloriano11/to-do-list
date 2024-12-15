const editForm = document.querySelector('.edit_task');
const editCancelButton = document.querySelector('.edit_cancel')

const pencils = document.querySelectorAll('.pencil');

pencils.forEach((pencil) => {

    pencil.addEventListener('click', () => {


        editForm.classList.remove('hide');
        editForm.classList.add('central');
        titleContainer.classList.add('opacidade');
        principal.classList.add('opacidade');
        body.style.overflow = 'hidden';
        setTimeout(() => {
            body.scrollTo({top: 0, behavior: 'smooth'});
        }, 0);
    });

});

editCancelButton.addEventListener('click', () => {
    editForm.classList.add('hide');
    editForm.classList.remove('central');
    titleContainer.classList.remove('opacidade');
    principal.classList.remove('opacidade');
    body.style.overflow = '';
})

