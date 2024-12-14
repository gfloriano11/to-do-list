const checks = document.querySelectorAll('.check');

const folder = 2;

checks.forEach((check) => {

    // console.log('olá [estou dentro da 1ª arrow function]')

    const tasks = document.querySelectorAll('.task');

    tasks.forEach((task) => {

        // console.log('olá [estou dentro da 2ª arrow function]')

        check.addEventListener('click', () => {
        
            check.classList.remove('check');
            check.classList.add('clicked_check');

            let taskId = task.dataset.id;

            fetch(`../backend/update/update_folder.php?id=${taskId}&id_folder=${folder}`), {
                method: 'GET'
            }
    
            location.reload(true);

            setTimeout(() => {
            }, 1000);
        })
    })
})