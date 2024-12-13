const checks = document.querySelectorAll('.check');

checks.forEach((check) => {
    check.addEventListener('click', () => {
        check.classList.remove('check');
        check.classList.add('clicked_check');
    
        const folder = 2;
    
        setTimeout(() => {
        }, 3000);
    })
})