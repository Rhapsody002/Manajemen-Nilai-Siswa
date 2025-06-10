<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
  <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
  <p><a href="logout.php">Logout</a></p>
</body>
</html>

