
<?php
    //require_once './js/main.js';
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['passwordrepeat'];
    $email = $_POST['email'];
    $newsseller = $_POST['newsseller'];

    
    
    // if($message=TestLogin($login)!='Ok'){
    //     $status = false;
    // }else{
        if($password === $passwordrepeat){
            // if(checkPassword($password) < 3){
            //     $status = false;
            //     $message = 'Пароль слишком простой!';
            // }else{
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
                        mysqli_query($connect, "INSERT INTO `users` (`login`, `password`, `email`, `newsseller`) VALUES ('$login','$password','$email','$newsseller')");
                        $status = true;
                        $message = 'Регистрация прошла успешно';
                    }
                }
            //}
    
        }else{
            $status = false;
            $message = 'Пароли не совпадают';
        }
    //}
    $response = [
        "status" => $status,
        "message" => $message,
    ];
    echo json_encode($response);
?>
