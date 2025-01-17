const loginContainer = document.querySelector('.form-container');
const registerContainer = document.getElementById('register-container');
const showRegister = document.getElementById('show-register');
const showLogin = document.getElementById('show-login');


showRegister.addEventListener('click', () => {
  loginContainer.classList.add('hidden');
  registerContainer.classList.remove('hidden');
});


showLogin.addEventListener('click', () => {
  registerContainer.classList.add('hidden');
  loginContainer.classList.remove('hidden');
});

  