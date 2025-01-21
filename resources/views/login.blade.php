<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Indeks KAMI</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h2>Indeks KAMI</h2>
        <form id="loginForm" onsubmit="login(event)">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" required>
            </div>
            <button type="submit">masuk</button>
        </form>
        <p>belum punya akun? <a href="register.html">daftar</a></p>
        <p><a href="#">lupa password?</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
