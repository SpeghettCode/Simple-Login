// client side form validation
const inputs = document.querySelectorAll('.sign-up-input');

inputs.forEach(input => {
    input.addEventListener('input', () => {

        let regex;
        let inputSpan;

        switch (input.getAttribute('name')) {
            case 'username':
                regex = /^(?=.{3,20}$)[a-zA-Z0-9]/;
                inputSpan = document.querySelector('.name-span');
                break;

            case 'email':
                regex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                inputSpan = document.querySelector('.email-span');
                break;

            case 'password':
                regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
                inputSpan = document.querySelector('.pass-span');
                break;

            default:
                break;
        }

        if (regex.test(input.value)) {
            inputSpan.innerHTML = '<i class="fas fa-check-circle"></i>';

        } else {
            inputSpan.innerHTML = '<i class="fas fa-times-circle"></i>';
        }
    })
})

// check if passwords match
const password = document.querySelector('.sign-up-pass');
const confirmPassword = document.querySelector('.sign-up-confirm-pass');

if (confirmPassword) {
    
    confirmPassword.addEventListener('input', () => {
        const passwordSpan = document.querySelector('.confirm-pass-span');
    
        if (password.value === confirmPassword.value) {
            passwordSpan.innerHTML = '<i class="fas fa-check-circle"></i>';
    
        } else {
            passwordSpan.innerHTML = '<i class="fas fa-times-circle"></i>';
        }
    })
}