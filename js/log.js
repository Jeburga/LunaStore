const visor = document.getElementById('visorPassword');
const inputPassword = document.getElementById('inputPassword');


visor.addEventListener('click', ()=>{
    if(inputPassword.type == 'password'){
        inputPassword.type = 'text';
        visor.classList.remove('bx-show-alt');
        visor.classList.add('bx-hide');
    } else {
        inputPassword.type = 'password';
        visor.classList.remove('bx-hide');
        visor.classList.add('bx-show-alt');
    }
})