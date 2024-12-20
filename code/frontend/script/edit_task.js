const editButtons = document.querySelectorAll('.edit_button');

console.log(editButtons)

pencils.forEach((pencil) => {

    pencil.addEventListener('click', () => {

        task = pencil.closest('.task');

        taskId = task.dataset.id

        console.log(`ID da Task (edit_task): ${taskId}`)

        console.log(editButtons)

        editButtons.forEach((button) => {

            button.addEventListener('click', () => {

                let taskName = document.querySelector('input[name="edit_task_name"]').value;
                let taskDesc = document.querySelector('textarea[name="edit_task_desc"]').value;
                let finalDate = document.querySelector('input[name="edit_final_date"]').value;
                let priority = document.querySelector('select[name="edit_priority"]').value;

                fetch(`../backend/update/update_task.php?id=${taskId}&task_name=${taskName}&task_desc=${taskDesc}&final_date=${finalDate}&priority=${priority}`),{
                    method: 'GET'
                }

                setTimeout(() => {

                    location.reload(true);

                }, 1000)

            })

        })

    })

})

