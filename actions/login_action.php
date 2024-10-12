<?php
require_once('../database/conn.php');
session_start();

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if ($username && $password) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $sql->bindValue(':username', $username);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $user = $sql->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../index.php");
            exit;
        } else {
            echo "Incorrect username or password.";
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "Please fill in all fields.";
}
