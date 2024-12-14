const trashCan = document.querySelectorAll('.trash_container');

trashCan.forEach((can) => {

    const tasks = document.querySelectorAll('.task');

    tasks.forEach((task) => {

        can.addEventListener('click', () => {
        
            let taskId = task.dataset.id;
    
            console.log(`Id da tarefa: ${taskId}`);
    
            fetch(`../backend/delete/delete_task.php?id=${taskId}`, {
                method: 'GET'
            })
    
            location.reload(true);
        })
    })
});