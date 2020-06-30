<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/main.js"></script>
    <title>JDMShop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div id="logo" onclick="slowScroll('#top')">
            <a href="index.php" title="Главная" id="logo" style="text-decoration:none;"><span>JDMShop</span></a>
        </div>
        <div class="about">
            <a href="#" title="Магазин" onclick="slowScroll('#catalog')">Каталог</a>
            <a href="#" title="О нас" onclick="slowScroll('#aboutus')">О нас</a>
            <a href="#" title="Информация" onclick="slowScroll('#info')">Информация</a>
            <a href="#" title="Авторизация" onclick="document.getElementById('auth').style.display='block'">Авторизация</a>
            <a href="#" title="Корзина" onclick="slowScroll('#cart')">Корзина</a>
        </div>
    </header>
    <div id="overview">
        <h2>Каталог товаров</h2>
        <h4>Двигатели</h4>

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
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
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