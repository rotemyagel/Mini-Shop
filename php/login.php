<?php
session_start();
$servername = "localhost";
$username = "rotem";
$password = "2020";
$dbname = "mini_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);
$pass = hash('sha512', $pass);
$sql = "SELECT id FROM author WHERE email='$email' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $_SESSION['author'] = mysqli_fetch_array($result)[0];
    header('Location: http://mini-shop.local/admin/insert_post.php');
} else {
    header('Location: http://mini-shop.local/login.php?error=1');
}

mysqli_close($conn);
