<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lampu Hias</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Sesuaikan path jika diperlukan -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #E7F0DC;
        }
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 400px;
            width: 100%;
            color: pink;
        }
        .login-container h2 {
            color: blueviolet;
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            font-size: 16px;
            color: navy;
            margin-bottom: 10px;
            text-align: left;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid pink;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-container input[type="submit"] {
            background-color: blueviolet;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container input[type="submit"]:hover {
            background-color: #B1AFFF;
        }
        .login-container footer {
            margin-top: 20px;
            font-size: 14px;
            color: pink;
        }
        .login-container a {
            color: #088395;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            margin: 0 10px;
        }
        p.welcome-text {
            font-size: 18px;
            color: navy;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <p class="welcome-text">Selamat Datang Di "Lampu Hias"</p>
        <div class="logo-container">
        </div>
        <h2>Login</h2>
        <form action="process_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <p><a href="forgot_password.php">Lupa Kata Sandi?</a></p>
    </div>

    <!-- Script untuk memberikan fokus ke input username saat halaman dimuat -->
    <script>
        document.getElementById('username').focus();
    </script>
</body>
</html>
