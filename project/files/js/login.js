const createAccountLink = document.querySelector('.sign-up-link');
const loginLink = document.querySelector('.log-in-link');
const singUpTemplate = document.querySelector('.sign-up-template');
const logInTemplate = document.querySelector('.log-in-template');

createAccountLink.addEventListener('click', () => {
  singUpTemplate.classList.remove('hidden');
  logInTemplate.classList.add('hidden');
});

loginLink.addEventListener('click', () => {
  logInTemplate.classList.remove('hidden');
  singUpTemplate.classList.add('hidden');
});
