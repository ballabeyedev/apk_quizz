
const form = document.querySelector('.login');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const passwod = document.getElementById('password');
const adresse = document.getElementById('adresse');
const numero = document.getElementById('numero');
const errorsDiv = document.getElementById('error-message');
const button = document.getElementById('envoyer');

form.addEventListener('input', validateForm);

function resetForm() {
    form.reset();
}

function validateForm() {
    errorsDiv.innerHTML = '';
    let hasErrors = false;

    if (nom.value === '') {
        displayError('Le champ nom est obligatoire.');
        hasErrors = true;
    }

    if (prenom.value === '') {
        displayError('Le champ prénom est obligatoire.');
        hasErrors = true;
    }


    if (email.value === '') {
        displayError('Le champ email est obligatoire.');
        hasErrors = true;
    }

    if (passwod.value === '') {
        displayError('Le champ mot de passe est obligatoire.');
        hasErrors = true;
    }

    if (telephone.value === '') {
        displayError('Le champ de telephone est obligatoire.');
        hasErrors = true;
    }


    button.disabled = hasErrors;
}

function displayError(errorMessage) {
    const errorPara = document.createElement('p');
    errorPara.classList.add('error');
    errorPara.textContent = errorMessage;
    errorsDiv.appendChild(errorPara);
}
