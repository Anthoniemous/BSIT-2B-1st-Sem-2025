function signUp() {
    document.getElementById('signup-form').style.display = 'none';

    document.getElementById('login-form').style.display = 'block';
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('sign-up-btn').addEventListener('click', signUp);
});