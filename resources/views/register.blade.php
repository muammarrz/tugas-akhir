<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Indeks KAMI</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <h2>Indeks KAMI</h2>
        <form id="registerForm" onsubmit="register(event)">
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">konfirmasi password</label>
                <input type="password" id="confirmPassword" required>
            </div>
            <button type="submit">daftar</button>
        </form>
        <p>sudah punya akun? <a href="login.html">masuk</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
