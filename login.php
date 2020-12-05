<?php

require_once('./header.php');

?>

<div class="container">
    <h2 class="title">Login</h2>
    <div>
        <form action="php/login.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button class="submit" type="submit" name="submit_btn">Login</button>
        </form>
    </div>
</div>




<?php

require_once('./footer.php');

?>