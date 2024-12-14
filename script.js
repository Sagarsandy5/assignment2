const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

signUpButton.addEventListener('click', function() {
    signInForm.style.display = 'none';
    signUpForm.style.display = 'block';
    showSuccessMessage('Sign Up data is submitted successfully!');
});

signInButton.addEventListener('click', function() {
    signInForm.style.display = 'block';
    signUpForm.style.display = 'none';
});

function showSuccessMessage(message) {
    const successMessage = document.createElement('div');
    successMessage.innerText = message;
    successMessage.style.color = 'green';
    successMessage.style.marginTop = '10px';
    document.body.appendChild(successMessage);
}
