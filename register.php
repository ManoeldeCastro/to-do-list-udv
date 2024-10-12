<?php
require_once('database/conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if ($username && $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $sql->bindValue(':username', $username);
        $sql->bindValue(':password', $hashedPassword);
        $sql->execute();

        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="src/styles/style.css">
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div id="login-container">
            <h1>Register</h1>
            <form action="register.php" method="POST" class="register-form">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="register-button">Register</button>
            </form>
            <a href="login.php">Already have an account? Login here</a>
        </div>
    </div>
</body>

</html>
