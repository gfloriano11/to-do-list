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

        const task = pencil.closest('.task');

        taskId = task.dataset.id;

        console.log(`ID da task: ${taskId}`);

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
                const taskName = document.querySelector('input[name="task_name"]');
                const taskDesc = document.querySelector('textarea[name="task_name"]');
                const finalDate = document.querySelector('input[name="final_date"]');
                const priority = document.querySelector('select[name="priority"]');

                taskName.value = data.task_name;
                taskDesc.value = data.task_desc;
                finalDate.value = data.final_date;
                priority.value = data.priority;
            })
            .catch(error => console.log('Erro ao buscar dados: ' , error));
    });

});

editCancelButton.addEventListener('click', () => {
    editForm.classList.add('hide');
    editForm.classList.remove('central');
    titleContainer.classList.remove('opacidade');
    principal.classList.remove('opacidade');
    body.style.overflow = '';
})

