const check = document.querySelector('.check')
const texts = document.querySelector('.texts')

check.addEventListener('click', () => {
    check.classList.remove('check_icon')
    check.classList.add('clicked_check')
    texts.classList.add('text_checked')
})