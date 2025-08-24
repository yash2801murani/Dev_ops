<?php
$host = 'mysql-db';
$user = 'root';
$pass = 'root';
$db = 'messages';

$conn = new mysqli($host, $user, $pass);

// Create DB if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $db");
$conn->select_db($db);

// Create table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS todos (id INT AUTO_INCREMENT PRIMARY KEY, task VARCHAR(255) NOT NULL)");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    $task = $conn->real_escape_string($_POST['task']);
    $conn->query("INSERT INTO todos (task) VALUES ('$task')");
}

$result = $conn->query("SELECT * FROM todos");
?>

<!DOCTYPE html>
<html>
<head><title>To-Do List</title></head>
<body>
<h1>To-Do List</h1>
<form method="POST">
    <input type="text" name="task" required>
    <button type="submit">Add Task</button>
</form>
<ul>
<?php while($row = $result->fetch_assoc()): ?>
    <li><?= htmlspecialchars($row['task']) ?></li>
<?php endwhile; ?>
</ul>
</body>
</html>
