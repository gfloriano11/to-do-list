const editButtons = document.querySelectorAll('edit_button');

pencils.forEach((pencil) => {

    pencil.addEventListener('click', () => {

        task = pencil.closest('.task');

        taskId = task.dataset.id

        console.log(`ID da Task (edit_task): ${taskId}`)

        editButtons.forEach((button) => {

            button.addEventListener('click', () => {

                fetch(`../../backend/update/update_task.php?id=${taskId}`),{
                    method: 'POST'
                }


            })

        })

    })

})

