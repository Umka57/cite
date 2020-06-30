<?php 
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user) > 0){
        
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "role" => $user['role'],
            "email"=> $user['email']
        ];

        $response = [
            "status" => true,
            "message" => 'Добро пожаловать'
        ];

    }else{
        $response = [
            "status" => false,
            "message" => "Неверный логин или пароль"
        ];
    }
    echo json_encode($response); 
?>