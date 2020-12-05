<?php

session_start();
if (!isset($_SESSION['author'])) {
    header('Location: http://mini-shop.local/login.php');
}

require_once('./header.php');

?>



<form action="./php/add_author.php" method="POST">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit_btn">Insert</button>
</form>

<?php

require_once('./footer.php');

?>