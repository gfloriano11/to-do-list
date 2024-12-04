let form = document.querySelector('.form_task')
let addTaskButton = document.querySelector('#add_task')

addTaskButton.addEventListener('click', () => { // function add task
    form.classList.remove('hide')
})