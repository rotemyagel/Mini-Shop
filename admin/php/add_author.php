<?php

session_start();
if (!isset($_SESSION['author'])) {
    header('Location: /login.php');
}

if (isset($_POST['submit_btn'])) {

    $servername = "localhost";
    $username = "rotem";
    $password = "2020";
    $dbname = "mini_shop";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $pass = hash('sha512', $pass);
    $sql = "INSERT INTO author(name, email, password) VALUES('$name', '$email', '$pass')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    header('Location: /admin/insert_author.php');
}
