document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'yourusername' && password === 'yourpassword') {
        window.location.href = 'dashboard.html';
    } else {
        document.getElementById('message').textContent = 'Invalid credentials. Please try again.';
    }
});