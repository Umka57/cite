<?php
    require_once 'connect.php';

    $name = $_POST['name'];
    $price = $_POST['price'];
    $picture = $_POST['picture'];

    mysqli_query($connect, "INSERT INTO `products` (`name`, `price`, `picture`) VALUES ('$name','$price','$picture')");
    $status = true;
    $message = 'Добавление успешно';
       
    $response = [
        "status" => $status,
        "message" => $message,
    ];
    echo json_encode($response);
?>