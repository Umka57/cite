<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDMShop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php include 'header.php';?>

<div class="container">
    <table class="table" style="color:white;">
    <tr>
    <th>Логин</th>
    <th>Почта</th>
    <th>Пароль</th>
  </tr>
    <?php 
        require_once 'includes/connect.php';
        $users = mysqli_query($connect, "SELECT * FROM `users`");

    foreach($users as $user){
        echo "<tr>
                <th><a href=\"edituserform.php?userid=",$user['id'],"\" style=\"text-decoration:none;color:teal;\">",$user['login'],"</a></th>
                <th>",$user['email'],"</th>
                <th>encrypted</th>
            </tr>";
    }?>
    </table>
    <button type="button" onclick="document.getElementById('adduser').style.display='block'"; class="adduserbtn">Добавить пользователя</button>
    <?php include 'adduserform.php';?>
<div class="container">
    <table class="table" style="color:white;">
        <tr>
            <th>Изображение</th>
            <th>Название</th>
            <th>Цена</th>
        </tr>
       <?php 
        $items = mysqli_query($connect, "SELECT * FROM `products`");
        foreach($items as $item){
            echo "<tr>
                <th><img src=\"",$item['picture'],"\" style=\"width:100px;height:100px;border-radius:4px;\"></th>
                <th><a href=\"editproduct.php?itemid=",$item['id'],"\" style=\"text-decoration:none;color:teal;\">",$item['name'],"</a></th>
                <th>",$item['price'],"</th>
            </tr>";
            }?>
    </table>
    <?php include 'addproductform.php';?>
    <button type="button" onclick="document.getElementById('addproduct').style.display='block'" class="adduserbtn">Добавить товар</button>
</div>
<a href="includes/logout.php" style="text-decoration:none;color:red;">Выход</a>
    <script>
        function slowScroll(id){
            $('html, body').animate({
                scrollTop: $(id).offset().top
            },500);
        }

        $(document).on("scroll",function(){
            if($(window).scrollTop() === 0)
                $("header").removeClass("fixed");
            else
                $("header").attr("class","fixed");
        });
    </script>     
</body>
</html>