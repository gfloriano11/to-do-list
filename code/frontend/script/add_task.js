const form = document.querySelector('.form_task')
const addTaskButton = document.querySelector('#add_task')
const body = document.querySelector('body')
const titleContainer = document.querySelector('.title_container')
const principal = document.querySelector('.principal')
const cancelButton = document.querySelector('.cancel_button')

addTaskButton.addEventListener('click', () => { // function add task
    form.classList.remove('hide')
    form.classList.add('central')
    titleContainer.classList.add('opacidade')
    principal.classList.add('opacidade')
})

cancelButton.addEventListener('click', () => {
    form.classList.add('hide')
    form.classList.remove('central')
    titleContainer.classList.remove('opacidade')
    principal.classList.remove('opacidade')
})