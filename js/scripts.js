const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const box = document.getElementById('box');

signUpButton.addEventListener('click', () => {
	box.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	box.classList.remove("right-panel-active");
});