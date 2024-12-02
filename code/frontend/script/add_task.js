let form = document.querySelector('.form_task')
let addTaskButton = document.querySelector('#add_task')

addTaskButton.addEventListener('click', addTask)

function addTask(){
    console.log('removi!')
    form.classList.remove('hide')
}