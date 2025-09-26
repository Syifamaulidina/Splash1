<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Personal Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height:100vh; background:#FBDCE1;">

<div class="card shadow-lg p-4" style="width: 400px; border-radius:15px; background:#D0EEF0;">
  <div class="text-center">
    <img src="syifa.jpeg" class="rounded-circle mb-3" width="120" height="120" alt="Foto Mahasiswa">
    <h4>Syifa Maulidina</h4>
    <p>NIM: 2304140046</p>
  </div>
  <form action="auth.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Masukkan Nama Depan" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Password (NIM)</label>
      <input type="password" name="password" class="form-control" placeholder="Masukkan NIM" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="remember">
      <label class="form-check-label">Remember Me</label>
    </div>
    <button type="submit" class="btn btn-pink w-100">Login</button>
  </form>
</div>

</body>
</html>
