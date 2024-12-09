const check = document.querySelector('.check')
const texts = document.querySelector('.texts')

check.addEventListener('click', () => {
    check.classList.remove('check')
    check.classList.add('clicked_check')
    texts.classList.add('text_checked')

    $.ajax({
        url: '../../backend/update/update.php',
        type: 'POST', 
        data: {
            'folder' : folder 
        },
        dataType: 'json',
        success: function(data){
            alert('Resultado: '+data)
        },
        error: function(request, error)
        {
            alert("Resultado: "+ JSON.stringify(request))
        }
    })

    const folder = 2;

    setTimeout(() => {
    }, 3000)
})