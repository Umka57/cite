<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<?php include 'header.php';?>
<body>
<div id="edituser" class="modal">
      
        <form class="modal-content animate" style="display:block;">
          <div class="container">
            
            <?php 
                require_once 'includes/connect.php';
                $userid = isset($_GET['userid']) ? $_GET['userid']: null;
                $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id`='$userid'");
            ?>
            <input type="number" name="id" value="<?=$user['id']?>" style="display:none;"><br>

            <label for="editlogin"><b>Логин</b></label><br>
            <input type="text" placeholder="Введите логин" name="editlogin" value="<?=$user['login']?>" required><br>
      
            <label for="editemail"><b>Email</b></label><br>
            <input type="email" placeholder="Введите почту" name="editemail" value="<?=$user['email']?>" required><br>

            <label for="editpassword"><b>Пароль</b></label><br>
            <input type="password" placeholder="Введите пароль" name="editpassword" value="encrypted" required><br>
            
            <button type="button" onclick="" class="edituser_btn" style="background-color:blue;">Редактировать</button>
            <button type="button" onclick="" class="delete_btn" style="background-color:red;">Удалить</button>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('edituser').style.display='none'" class="cancelbtn">Отмена</button>
            <label class="msg"></label>
            </div>
        </form>
        </div>
        <script src="./js/jquery-3.5.1.min.js"></script>
        <script src="./js/main.js"></script>
</body>
</html>