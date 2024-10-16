<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

require_once('database/conn.php');

$tasks = [];

$sql = $pdo->query("SELECT * FROM task ORDER BY id ASC");

if ($sql->rowCount() > 0) {
  $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
}

function formatDate($date)
{
  if ($date) {
    return date('d/m/y - H:i', strtotime($date));
  }
  return 'Not finished yet';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="src/styles/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>To-do</title>
</head>

<body>
  <div class="filter-container">
    <label for="filter" class="filter-label">Filter Tasks:</label>
    <select id="filter" class="filter-select">
      <option value="all">All</option>
      <option value="completed">Completed</option>
      <option value="not_completed">Not Completed</option>
    </select>
  </div>
  <div class="logout-container">
    <a href="logout.php" class="logout-link">
      <i class="fa-solid fa-right-from-bracket logout-icon"></i>
    </a>
  </div>

  <div id="to_do">
    <h1>Things to do</h1>

    <form action="actions/create.php" method="POST" class="to-do-form">
      <input type="text" name="name" placeholder="Task Name" required>
      <input type="text" name="description" placeholder="Task Description" required>
      <button type="submit" class="form-button">
        <i class="fa-solid fa-plus"></i>
      </button>
    </form>

    <div id="tasks">
      <?php foreach ($tasks as $task): ?>
        <div class="task">
          <input
            type="checkbox" y
            id="task-<?= $task['id'] ?>"
            name="progress"
            class="progress <?= $task['completed'] ? 'done' : '' ?>"
            data-task-id="<?= $task['id'] ?>"
            <?= $task['completed'] ? 'checked' : '' ?>>

          <label for="task-<?= $task['id'] ?>"></label>

          <p>
            <strong>Name:</strong> <?= $task['name'] ?>
            <?php if ($task['completed']): ?>
              <i class="fa-solid fa-check" style="color: #28a745; margin-left: 5px;"></i>
            <?php endif; ?>
          </p>

          <p><strong>Description:</strong> <?= $task['description'] ?></p>

          <p><strong>Created:</strong> <?= formatDate($task['created_at']) ?></p>
          <p><strong>Finished:</strong> <?= formatDate($task['finished_at']) ?></p>

          <div class="task-actions">
            <a class="action-button edit-button">
              <i class="fa-regular fa-pen-to-square"></i>
            </a>

            <a href="actions/delete.php?id=<?= $task['id'] ?>" class="action-button delete-button">
              <i class="fa-regular fa-trash-can"></i>
            </a>
          </div>

          <form action="actions/update.php" method="POST" class="to-do-form edit-task hidden">
            <input type="text" class="hidden" name="id" value="<?= $task['id'] ?>">
            <input
              type="text"
              name="description"
              placeholder="Edit your task here"
              value="<?= $task['description'] ?>">
            <button type="submit" class="form-button confirm-button">
              <i class="fa-solid fa-check"></i>
            </button>
          </form>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <script src="src/javascript/script.js"></script>
</body>

</html>