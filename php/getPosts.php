<?php

function getMainPost()
{
    $servername = "localhost";
    $username = "rotem";
    $password = "2020";
    $dbname = "mini_shop";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $path = $row['image'];
        $is_sale =  $row['sale'] ? '<span class="price delete-price">' . $row['price'] . '</span><span class="sale-price">' . $row['sale_price'] . '</span>' : '<span class="price">' . $row['price'] . '</span>';
        $banner = $row['sale'] ? '<div class="banner">Sale</div>' : '';

        echo '
  <div class="card">
  <div class="card-body">
  ' . $banner . '
  <img src="' . $path . '" class="card-img" alt="' . $row['title'] . '">
        <div class="card-content">
        <h3 class="card-title">' . $row['title'] . '</h3>
        <div>' . $is_sale . '</div>
        <p class="card-text">' . $row['content'] . '</p>
        <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
    </div>
  </div>
        ';
    }

    mysqli_close($conn);
}
