
<?php
    require_once 'connect.php';
    require_once 'main.js';
    $login = $_POST['login'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['passwordrepeat'];
    $email = $_POST['email'];
    $newsseller = $_POST['newsseller'];

    if($message=TestLogin($login)!='Ok'){
        $status = false;
    }else{
        if($password === $passwordrepeat){
            if(checkPassword(password)<3){
                $status = false;
                $message = 'Пароль слишком простой!';
            }else{
                $password = md5($password);
                
                $check_user = mysqli_query("SELECT * FROM 'users' WHERE 'login' = '$login'");
                if(mysqli_num_rows($check_user) > 0){
                    $status = false;
                    $message = 'Данный логин уже занят';
                } else {
                    $check_user = mysqli_query("SELECT * FROM 'users' WHERE 'email' = '$email'");
        
                    if(mysqli_num_rows($check_user) > 0){
                        $status = false;
                        $message = 'Данный email уже занят';
                    } else {
                        mysqli_query($connect,"INSERT INTO 'users' ('id','login','password','email','role','newsseller') VALUES (NULL,'$login','$password','$email',NULL,'$newsseller')");
                        $status = true;
                        $message = 'Регистрация прошла успешно';
                    }
                }
            }
    
        }else{
            $status = false;
            $message = 'Пароли не совпадают';
        }
    }
    $response = [
        "status" => $status,
        "message" => $message,
    ];
    echo json_encode($response);
?>
