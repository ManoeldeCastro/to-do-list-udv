<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="src/styles/style.css">
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div id="login-container">
            <h1>Login</h1>
            <form action="actions/login_action.php" method="POST" class="login-form">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="login-button">Login</button>
            </form>
            <a href="register.php">Don't have an account? Register here</a>
        </div>
    </div>
</body>

</html>
