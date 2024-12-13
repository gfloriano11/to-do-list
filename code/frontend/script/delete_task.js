const trashCan = document.querySelectorAll('.trash_container');

trashCan.forEach((can) => {
    can.addEventListener('click', () => {
        fetch('../../backend/delete/delete_task.php', {
            method: 'DELETE'
        })
    })
});