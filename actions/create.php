<?php

require_once('../database/conn.php');

$name = filter_input(INPUT_POST, 'name');
$description = filter_input(INPUT_POST, 'description');

if ($name && $description) {
    $sql = $pdo->prepare("INSERT INTO task (name, description) VALUES (:name, :description)");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':description', $description);
    $sql->execute();

    header('Location: ../index.php');
    exit;
} else {
    header('Location: ../index.php');
    exit;
}
