document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === '1' && password === '1') {
        window.location.href = 'dashboard.html';
    } else {
        document.getElementById('message').textContent = 'Invalid credentials. Please try again.';
    }
});