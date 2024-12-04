let form = document.querySelector('.form_task')
let addTaskButton = document.querySelector('#add_task')
let body = document.querySelector('body')
let titleContainer = document.querySelector('.title_container')
let principal = document.querySelector('.principal')

addTaskButton.addEventListener('click', () => { // function add task
    form.classList.remove('hide')
    titleContainer.classList.add('opacidade')
    principal.classList.add('opacidade')
})