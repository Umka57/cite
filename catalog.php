<?php 
    session_start(); 
    require_once 'includes/pag.php'; 
?>
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
            <a href="index.php" title="Главная" id="logo" style="text-decoration:none;">
            <span>JDMShop</span></a>
        </div>
        <div class="about">
            <a href="#" title="Магазин" onclick="slowScroll('#catalog')">Каталог</a>
            <a href="#" title="О нас" onclick="slowScroll('#aboutus')">О нас</a>
            <a href="#" title="Информация" onclick="slowScroll('#info')">Информация</a>
            <a href="#" title="Авторизация" onclick="document.getElementById('auth').style.display='block'">Авторизация</a>
            <a href="#" title="Корзина" onclick="slowScroll('#cart')">Корзина</a>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <div class="heading-block">
                <h2 class="title">Каталог товаров</h2>
                <h3 class="sublitle">Двигатели</h3>
            </div>
            <?
                $page = isset($_GET['page']) ? $_GET['page']: 1 ;

                $limit = 3;
                $offset = $limit * ($page - 1);

                $items = get_items($limit,$offset);

                foreach($items as $item){ 
                    echo "<div class=\"card\">
                            <div class=\"card__image\"><img src=\"",$item['picture'],"\"></div>
                            <div class=\"card__title\">",$item['name'],"</div>
                            <div class=\"card__price\">
                                <span>",$item['price'],"</span>
                            </div>
                        </div>";
                } ?>
        </div>
        <div class="pagination">
            <?

                $pagesCount = count_pages($limit);

                if($page != 1) {
                    $prev = $page - 1;
                    echo "<a href=\"?page=$prev\">«</a>";
                }
        
                for($i = 1; $i <=$pagesCount;$i++){
                    if($page = $i){
                        echo "<a href=\"?page=$i\" class=\"active\">$i</a>";
                    } else {
                        echo "<a href=\"?page=$i\">$i</a>";
                    }
                }
        
                if($page != $pagesCount) {
                    $next = $page + 1;
                    echo "<a href=\"?page=$next\">»</a>";
                }
            ?>
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