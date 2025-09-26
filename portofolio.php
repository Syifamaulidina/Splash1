<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Splash-portofolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Crimson+Text&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
    <div class="container justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="portofolio.php">Portofolio</a></li>
      </ul>
    </div>
  </nav>

  <section class="portofolio-section text-center">
    <div class="overlay">
      <h2>My CV is just one click away!</h2>
      <a href="#" class="btn btn-pink">Check it out</a>
    </div>
  </section>

</body>
</html>