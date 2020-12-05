<?php

$author_id = NULL;

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_SESSION['author'])) {
    $author_id = $_SESSION['author'];
}



$servername = "localhost";
$username = "rotem";
$password = "2020";
$dbname = "mini_shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT name FROM author WHERE id='$author_id'";
$result = mysqli_query($conn, $sql);
$name = mysqli_fetch_array($result)[0];

mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="nav">
                <a class="navbar-brand" href="/">Mini<br /> Shop</a>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <?php

                        if ($author_id) : ?>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/insert_post">Insert Product</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/insert_author">Insert Author</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/php/logout">Logout</a>
                            </li>



                        <?php else : ?>

                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>

                        <?php endif; ?>



                        <li class="nav-item login">
                            <?= $name ? 'Welcome ' . $name : 'Welcome guest' ?>
                        </li>

                    </ul>

                </div>
                <div class="bars"><button id="nav-btn"><i class="fa fa-bars" aria-hidden="true"></i></button></div>
            </div>
        </div>
    </nav>