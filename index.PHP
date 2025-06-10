<?php
session_start();

// Dummy user array
$users = [
  ['username' => 'admin', 'password' => 'admin123'],
  ['username' => 'guru', 'password' => 'guru123']
];

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      $_SESSION['username'] = $username;
      header('Location: dashboard.php');
      exit;
    }
  }
  $error = 'Username atau password salah!';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Findonews.id%2Fartikel%2F321851%2FIni-Ciri-Ciri-Sekolah-Unggulan-yang-Harus-Kamu-Tahu%2F&psig=AOvVaw2a0ItJEroezBB1_hefV64O&ust=1749607599926000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOD38rPi5Y0DFQAAAAAdAAAAABAE" alt="logo">
    <h2>LOG IN</h2>
    <form method="post">
      <div class="input-group">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="remember">
        <label for="remember"> Remember me</label>
      </div>
      <button type="submit">Login</button>
      <?php if ($error): ?>
        <p style="color: yellow; margin-top: 10px;"><?php echo $error; ?></p>
      <?php endif; ?>
      <p class="forgot">Forgot Password?</p>
    </form>
  </div>
</body>
</html>
