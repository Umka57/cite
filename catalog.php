<?php 
    session_start(); 
    require_once 'includes/pag.php';
    require_once 'includes/connect.php';
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
<?php include 'header.php';?>
    <div class="section">
        <div class="container">
            <div class="heading-block">
                <h2 class="title">Каталог товаров</h2>
                <h3 class="subtitle">Двигатели</h3>
            </div>
            <?
                $page = isset($_GET['page']) ? $_GET['page']: 1 ;

                $limit = 5;
                $offset = $limit * ($page - 1);
                
                $items = get_items($limit,$offset,$connect);

                foreach($items as $item){ 
                    echo "<div class=\"card\" style=\"display: inline-block; margin:auto;padding:20px;\">
                            <div class=\"card__image\"><img src=\"",$item['picture'],"\" style=\"width:300px;height:300px;border-radius:4px;\"></div>
                            <div class=\"card__title\">",$item['name'],"</div>
                            <div class=\"card__price\"><span>",$item['price'],"</span></div>
                        </div>";
                } 
                ?>
        </div>
        <div class="pagination">
            <?
                $pagesCount = count_pages($limit,$connect);

                if($page != 1) {
                    $prev = $page - 1;
                    echo "<a href=\"?page=$prev\">«</a>";
                }
        
                for($i = 1; $i <= $pagesCount;$i++){
                    if($page == $i){
                        $class = 'class="active"';
                    } else {
                        $class='';
                    }
                    echo "<a href=\"?page=$i\"$class>$i</a>";
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