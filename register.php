<?php
    include('includes/classes/Account.php');
    include('includes/handlers/register-handlers.php');
    include('includes/handlers/login-handlers.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Spotify!</title>
</head>
<body>
<div class="wrapper">

    <form action="index.php" id="loginForm" method="POST">
        <h2>Login to your account</h2>
        <p>
            <label for="loginUsername">Username</label>
            <input type="text" id="loginUsername" name="loginUsername" required>
        </p>
        <p>
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
        </p>
        <p>
            <button type="submit" id="loginButton" name="loginButton">LOG IN</button>
        </p>
    </form>

    <form action="includes/handlers/register-handlers.php" id="registerForm" method="POST">
        <h2>Create your free account</h2>
        <p>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" required>
        </p>
        <p>
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" required>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </p>
        <p>
            <label for="password2">Password Confirmation</label>
            <input type="password" id="password2" name="password2" required>
        </p>
        <p>
            <button type="submit" id="registerButton" name="registerButton">SIGN UP</button>
        </p>
    </form>

</div>
</body>
</html>