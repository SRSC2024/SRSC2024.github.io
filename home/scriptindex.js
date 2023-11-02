document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if (username.toLowerCase() === 'omar' && password.toLowerCase() === 'omar') {
        window.location.href = 'dashboard.html';
    } else {
        document.getElementById('message').textContent = 'Invalid credentials. Please try again.';
    }
});
