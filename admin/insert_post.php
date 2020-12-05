<?php

session_start();
if (!isset($_SESSION['author'])) {
    header('Location: http://mini-shop.local/login.php');
}

require_once('../header.php');





?>

<div class="container">
    <h2 class="title">Insert Post</h2>
    <div>
        <?php
        if (isset($_GET['msg'])) {
            $message = "New product created successfully";
            echo '<div class="msg">' . $message . '</div>';
        }
        ?>
        <form action="./php/insert_post.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="author" value="<?php echo $_SESSION['author']; ?>">
            <input type="text" name="title" placeholder="Title">
            <input type="number" name="price" placeholder="Price">
            <input type="checkbox" name="sale">
            <span>Product on sale</span>
            <input type="number" name="sale_price" placeholder="Sale Price">
            <input type="file" name="file">
            <textarea name="content" cols="30" rows="10" placeholder="Content"></textarea>
            <button class="submit" type="submit" name="submit_btn">Insert</button>
        </form>
    </div>
</div>




<?php

require_once('../footer.php');

?>