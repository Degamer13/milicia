const emailInput = document.getElementById('email');
const emailValidationMessage = document.getElementById('email-validation-message');

emailInput.addEventListener('input', function () {
  if (emailInput.validity.typeMismatch) {
    emailValidationMessage.textContent = 'Por favor, ingrese un correo electrónico válido.';
  } else {
    emailValidationMessage.textContent = '';
  }
});