<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login-style.css">
    <script src="js/login.js"></script>
</head>

<body>
    <div class="login">
        <img src="images/logo-polsri.png" class="avatar">
        <h1>Login</h1>
        <form id="loginForm" name="loginForm" method="POST">
            <div class="container">
                <label for="input_email">Email</label>
                <input type="email" placeholder="Masukkan email" class="input" id="email" required>

                <label for="input_pw">Password</label>
                <input type="password" placeholder="Masukkan password" class="input" id="password" required>

                <input type="submit" class="btn_login" value="Login">
            </div>
        </form>
    </div>

</body>

</html>