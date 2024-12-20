const trashCan = document.querySelectorAll('.trash_container');

trashCan.forEach((can) => {

        can.addEventListener('click', () => {

            const task = can.closest('.task');
        
            let taskId = task.dataset.id;
    
            fetch(`../backend/delete/delete_task.php?id=${taskId}`, {
                method: 'GET'
            })
    
            setTimeout(() => {
                
                location.reload(true);
            
            }, 1000);
        })
});