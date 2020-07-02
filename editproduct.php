<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include 'header.php';?>
<div id="addproduct" class="modal">
      
        <form class="modal-content animate">
          <div class="container">
            
            <img src="" style="width:200px;height:200px;margin:auto;display:none;border-radius:4px;" id="pictureprev">

            <label for="name"><b>Название</b></label><br>
            <input type="text" placeholder="Введите название" name="name" required><br>
      
            <label for="price"><b>Цена</b></label><br>
            <input type="number" placeholder="Введите цену" name="price" required><br>
            
            <label for="picture"><b>Изображение</b></label><br>
            <input type="url" placeholder="Вcтавьте ссылку на изображение" name="picture" required><br>

            <button type="submit" class="addproduct_btn">Добавить</button>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('addproduct').style.display='none'" class="cancelbtn">Отмена</button>
            <label class="msg"></label>
            </div>
        </form>
        </div>
        <script src="./js/jquery-3.5.1.min.js"></script>
        <script src="./js/main.js"></script>
</body>
</html>