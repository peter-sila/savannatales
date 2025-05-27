<?php
session_start();

require_once 'backend_php/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="form">
        <h2>Welcome, to Savannatales</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email or Username</label><br>
                <input type="text" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit" name="login">LOGIN</button>
            <p>Don't have an account? <a href="register.php">REGISTER</a></p>
        </form>
    </div>
</body>
</html>