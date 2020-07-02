<?php
    require_once 'connect.php';

    $id = $_POST['id'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    let $errors = 0;

    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");
    
    if($password!="encrypted"){
        $password = md5($password);
    } else {
        $password = $user['password'];
    }
        if($login!=$user['login']){
            $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
            
            if(mysqli_num_rows($check_login) > 0){
                $status = false;
                $message = "Такой логин уже существует";
                } else {
                    if($email!=$user['email']){
                        $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
                                
                        if(mysqli_num_rows($check_email) > 0){
                            $status = false;
                            $message = 'Данный email уже занят';
                        } else {
                            mysqli_query($connect, "UPDATE `users` SET `login` = $login,`password` = $password, `email` = $email WHERE `id` = $id");
                            $status = true;
                            $message = 'Изменения сохранены';
                        }
                    } else {
                        $email=$user['email'];
                        mysqli_query($connect, "UPDATE `users` SET `login` = $login,`password` = $password, `email` = $email WHERE `id` = $id");
                        $status = true;
                        $message = 'Изменения сохранены';
                    }
            }
        } else {
            $login = $user['login'];
            if($email!=$user['email']){
                $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
                            
                if(mysqli_num_rows($check_email) > 0){
                    $status = false;
                    $message = 'Данный email уже занят';
                } else {
                    mysqli_query($connect, "UPDATE `users` SET `login` = $login,`password` = $password, `email` = $email WHERE `id` = $id");
                    $status = true;
                    $message = 'Изменения сохранены';
                }
            } else {
                $email=$user['email'];
                mysqli_query($connect, "UPDATE `users` SET `login` = $login,`password` = $password, `email` = $email WHERE `id` = $id");
                $status = true;
                $message = 'Изменения сохранены';
                }

        }

        $response = [
        "status" => $status,
        "message" => $message,
    ];
    echo json_encode($response);
?>