<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="form">
        <h2>Welcome, to Savannatales</h2>
        <form action="backend_php/register.php" method="post">
            <div class="form-group">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" required>
                <?php if (isset($errors['username'])): ?>
                    <div class="alert alert-danger">
                        <li><?php echo $errors['username']; ?></li>
                    </div>
                <?php endif; ?><br>
            </div>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required>
                <?php if (isset($errors['name'])): ?>
                    <div class="alert alert-danger">
                        <li><?php echo $errors['name']; ?></li>
                    </div>
                <?php endif; ?><br>
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required>
                <?php if (isset($errors['name'])): ?>
                    <div class="alert alert-danger">
                        <li><?php echo $errors['name']; ?></li>
                    </div>
                <?php endif; ?><br>
            </div>
            <div class="form-group">
                <label for="conf-password">Confirm Password</label>
                <input type="password" name="conf-password" id="conf-password" required>
            </div>

            <button type="submit" name="register">REGISTER</button>
            <p>Have an account? <a href="login.php">LOGIN</a></p>
        </form>
    </div>
</body>
</html>