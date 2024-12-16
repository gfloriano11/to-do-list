const trashCan = document.querySelectorAll('.trash_container');

trashCan.forEach((can) => {

        can.addEventListener('click', () => {

            const task = can.closest('.task');
        
            let taskId = task.dataset.id;
    
            console.log(`Id da tarefa: ${taskId}`);
    
            fetch(`../backend/delete/delete_task.php?id=${taskId}`, {
                method: 'GET'
            })
    
            setTimeout(() => {
                
                location.reload(true);
            
            }, 1000);
        })
});