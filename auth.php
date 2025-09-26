<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND nim='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // buat session
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['nim'] = $row['nim'];

    // remember me pakai cookie
    if (isset($_POST['remember'])) {
        setcookie("username", $row['username'], time() + (86400 * 7), "/"); 
    }

    header("Location: index.php");
} else {
    echo "<script>alert('Username atau Password salah'); window.location='login.php';</script>";
}
?>
