html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h2>Silakan Login</h2>

    <form action="proses-login.php" method="POST">
        <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required>
        </div>
        <br>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        <br>
        <div>
            <button type="submit">Masuk</button>
            <button type="reset">Reset</button>
        </div>
    </form>

    <p>Belum punya akun? <a href="register.html">Daftar di sini</a></p>

</body>
</html>