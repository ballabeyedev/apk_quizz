const form = document.getElementById('myForm');
const login = document.getElementById('login'); // Changer de email à login
const password = document.getElementById('password'); // Changer de passwd à password
const errorsDiv = document.getElementById('error-message');
const button = document.querySelector('.btn'); // Sélectionner le bouton de soumission

form.addEventListener('input', validateForm);

function resetForm() {
    form.reset();
}

function validateForm() {
    errorsDiv.innerHTML = '';
    let hasErrors = false;

    if (login.value === '') { // Utiliser login au lieu d'email
        displayError('Le champ identifiant est obligatoire.');
        hasErrors = true;
    }

    if (password.value === '') { // Utiliser password au lieu de passwd
        displayError('Le champ mot de passe est obligatoire.');
        hasErrors = true;
    }

    button.disabled = hasErrors; // Désactiver le bouton si des erreurs existent
}

function displayError(errorMessage) {
    const errorPara = document.createElement('p');
    errorPara.classList.add('error');
    errorPara.textContent = errorMessage;
    errorsDiv.appendChild(errorPara);
}
