const editForm = document.querySelector('.edit_task');
const editCancelButton = document.querySelector('.edit_cancel')

const pencils = document.querySelectorAll('.pencil');

pencils.forEach((pencil) => {

    pencil.addEventListener('click', () => {

        setTimeout(() => {

            editForm.classList.remove('hide');
            editForm.classList.add('central');
            titleContainer.classList.add('opacidade');
            principal.classList.add('opacidade');
            taskContainer.classList.add('opacidade');
            body.style.overflow = 'hidden';

        }, 300)

        body.scrollTo({top: 0, behavior: 'smooth'});

        const task = pencil.closest('.task');

        taskId = task.dataset.id;

        fetch(`../backend/read/get_task.php?id=${taskId}` ,{
            method: 'GET'
        })
            .then(response => {
                if (!response.ok){
                    throw new Error ("Erro na resposta do server");
                }
                return response.json()
            })
            .then(data => {

                document.querySelector('input[name="edit_task_name"]').value = data.task_name;
                document.querySelector('textarea[name="edit_task_desc"]').value = data.task_desc;
                document.querySelector('input[name="edit_final_date"]').value = data.final_date;
                document.querySelector('select[name="edit_priority"]').value = data.priority;
                document.querySelector('select[name="folder"]').value = data.folder;
                
            })
            .catch(error => console.log('Erro ao buscar dados: ' , error));
    });

});

editCancelButton.addEventListener('click', () => {
    editForm.classList.add('hide');
    editForm.classList.remove('central');
    titleContainer.classList.remove('opacidade');
    principal.classList.remove('opacidade');
    taskContainer.classList.remove('opacidade');
    body.style.overflow = '';
    
})

