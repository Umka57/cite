<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="adduser" class="modal">
        <span onclick="document.getElementById('adduser').style.display='none'" class="close" title="Close Modal">&times;</span>
      
        <form class="modal-content animate">
          <div class="container">
            
            <label for="addlogin"><b>Логин</b></label><br>
            <input type="text" placeholder="Введите логин" name="addlogin" required><br>
      
            <label for="addemail"><b>Email</b></label><br>
            <input type="email" placeholder="Введите почту" name="addemail" required><br>

            <label for="addpassword"><b>Пароль</b></label><br>
            <input type="password" placeholder="Введите пароль" name="addpassword" required><br>
            
            <button type="submit" class="adduser_btn">Добавить</button>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('adduser').style.display='none'" class="cancelbtn">Отмена</button>
            <label class="msg"></label>
            </div>
        </form>
        </div>
        <script src="./js/jquery-3.5.1.min.js"></script>
        <script src="./js/main.js"></script>
</body>
</html>