<?php

session_start();
if (!isset($_SESSION['author'])) {
    header('Location: /login.php');
}

require_once('../header.php');

?>


<div class="container">
    <h2 class="title">Insert Author</h2>
    <div>
        <?php
        if (isset($_GET['msg'])) {
            $message = "New product created successfully";
            echo '<div class="msg">' . $message . '</div>';
        }
        ?>
        <form action="./php/add_author.php" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button class="submit" type="submit" name="submit_btn">Insert</button>
        </form>
    </div>
</div>





<?php



require_once('../footer.php');

?>