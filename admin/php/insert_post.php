<?php

session_start();
if (!isset($_SESSION['author'])) {
    header('Location: http://mini-shop.local/login.php');
}


if (isset($_POST['submit_btn'])) {


    $title = $_POST['title'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $sale = isset($_POST['sale']) ? 1 : 0;
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $author = $_POST['author'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $path = "/uploads/" . basename($fileNameNew);
            } else {
                echo 'your file is to big';
            }
        } else {
            echo 'there was an error uploading you file';
        }
    } else {
        echo 'you cant upload files of this type';
    }


    $servername = "localhost";
    $username = "rotem";
    $password = "2020";
    $dbname = "mini_shop";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO post (title, content, image, price, sale, sale_price, author)
    VALUES ('$title', '$content', '$path', '$price', '$sale', '$sale_price', '$author')";

    if (mysqli_query($conn, $sql)) {
        echo "New product created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



    mysqli_close($conn);
    header('Location: http://mini-shop.local/admin/insert_post.php?msg');
}
