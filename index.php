<?php

require_once('./header.php');

require_once('./php/getPosts.php');

?>

<div class="hero">
    <div class="container">
        <div class="content">
            <h1 class="title">Mini Shop</h1>
            <h3 class="description">Effortless comfortable full leather lining eye-catching unique detail<br /> to the toe low 'cut-away' sides clean and sleek.</h3>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="title">Mountain Shoes</h2>
    <div class="cards">
        <?php getMainPost(); ?>
    </div>
</div>


<?php

require_once('./footer.php');
