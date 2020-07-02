<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDMShop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'header.php';?>
    

    <div id="top">
        <h1>Главный источник JDM деталей</h1>
        <h3>Собери машину своей мечты</h3>
    </div>
    <div id="overview">
        <h2>Преимущества</h2>
        <h4>Только оригинальные детали</h4>

        <div class="img">
            <img src="https://i.pinimg.com/564x/25/02/e0/2502e0a0cbdb2f5519d58809f945c845.jpg" alt="1JZ">
            <span>Надежные двигатели</span>
        </div>
        <div class="img">
            <img src="https://i.pinimg.com/564x/e9/53/51/e95351bbdaf31d1de16e5e304a3a87ad.jpg" alt="Parts">
            <span>Большой выбор расходников</span>
        </div>
        <div class="img">
            <img src="https://2.bp.blogspot.com/-VC2p_94OwgY/Vx2Sbtkc-jI/AAAAAAAAAJQ/mc4xbdkxJvcQD3LwT3JFhkGJ0Vyv6Cm0wCK4B/s1600-r/performance-car-parts-brands.jpg" alt="Brands">
            <span>Партнерские бренды</span>
        </div>
        <div class="img">
            <img src="https://cdn.shopify.com/s/files/1/1453/6614/products/monstersmooother_large.png?v=1543586403">
            <span>Различный мерч</span>
        </div>
    </div>

    <div id="contacts">
        <center><h5>Обратная связь</h5></center>
        <form id="form_input">
            <label for="name">Имя<span>*</span></label><br>
            <input type="text" placeholder="Введите имя" name="name" id="name"><br>
            <label for="email">Ваша почта<span>*</span></label><br>
            <input type="email" placeholder="Введите email" name="email" id="email"><br>
            <label for="message">Сообщение<span>*</span></label><br>
            <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
            <div id="mess_send" class="btn">Отправить</div>
        </form>
    </div>
    <div id="faq">

    </div>
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