<?php
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];

                $password = md5($password);
                
                $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

                if(mysqli_num_rows($check_login) > 0){
                    $status = false;
                    $message = "Такой логин уже существует";
                } else {
                    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
        
                    if(mysqli_num_rows($check_email) > 0){
                        $status = false;
                        $message = 'Данный email уже занят';
                    } else {
                        mysqli_query($connect, "INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login','$password','$email')");
                        $status = true;
                        $message = 'Регистрация прошла успешно';
                    }
                }

    $response = [
        "status" => $status,
        "message" => $message,
    ];
    echo json_encode($response);
?>