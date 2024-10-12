<?php

require_once('../database/conn.php');

$id = filter_input(INPUT_POST, 'id');
$completed = filter_input(INPUT_POST, 'completed');

if ($id && $completed !== null) {
    if ($completed == 'true') {
        $sql = $pdo->prepare("UPDATE task SET completed = :completed, finished_at = NOW() WHERE id = :id");
    } else {
        $sql = $pdo->prepare("UPDATE task SET completed = :completed, finished_at = NULL WHERE id = :id");
    }

    $sql->bindValue(':completed', $completed == 'true' ? 1 : 0);
    $sql->bindValue(':id', $id);
    $sql->execute();

    echo json_encode(['success' => true]);
    exit;
} else {
    echo json_encode(['success' => false]);
    exit;
}
