const checks = document.querySelectorAll('.check');

const folder = 2;

checks.forEach((check) => {

    check.addEventListener('click', () => {

        const task = check.closest('.task');
        
        check.classList.remove('check');
        check.classList.add('clicked_check');

        let taskId = task.dataset.id;

        fetch(`../backend/update/update_folder.php?id=${taskId}&id_folder=${folder}`, {
            method: 'GET'
        })

        setTimeout(() => {
                
            location.reload(true);
        
        }, 2000);

    })
});