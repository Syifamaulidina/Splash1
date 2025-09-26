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
  <title>Splash</title>
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
        <li class="nav-item"><a class="nav-link" href="portofolio.php">Portofolio</a></li>
      </ul>
    </div>
  </nav>

  <section class="hero d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 hero-text">
          <h1>Oh hey there, <br> I'm Syif4.</h1>
          <h2>You've come to the right place & <br> I am so glad that you are here!</h2>
        </div>
        <div class="col-md-6 text-center">
          <img src="profile.jpeg" alt="Profile" class="profile-img">
        </div>
      </div>
    </div>
  </section>

  <section class="content-section text-center">
    <div class="overlay">
      <h1>It's Me</h1>
      <h4>Everything you wrote about me, made me feel seen and I don't know how you did it!</h4>
      <a href="#" class="btn btn-pink">Text Me</a>
    </div>
  </section>

  <footer class="text-center footer">
    <p>Follow me on: 
      <a href="https://www.instagram.com/syifaldn/?utm_source=ig_web_button_share_sheet">Instagram</a> | 
      <a href="#">Twitter</a> | 
      <a href="https://github.com/Syifamaulidina">GitHub</a>
    </p>
  </footer>

</body>
</html>