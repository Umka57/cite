<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDMShop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div onclick="slowScroll('#top')">
            <a href="index.php" title="Главная" id="logo" style="text-decoration:none;"><span>JDMShop</span></a>
        </div>
        <div class="about">
            <a href="catalog.php" title="Магазин" onclick="slowScroll('#catalog')">Каталог</a>
            <a href="#" title="О нас" onclick="slowScroll('#aboutus')">О нас</a>
            <a href="#" title="Информация" onclick="slowScroll('#info')">Информация</a>
            <a href="#" title="Авторизация" onclick="document.getElementById('auth').style.display='block'">Авторизация</a>
            <a href="#" title="Корзина" onclick="slowScroll('#cart')">Корзина</a>
        </div>
    </header>

    <div id="auth" class="modal">
        <span onclick="document.getElementById('auth').style.display='none'" class="close" title="Close Modal">&times;</span>
      
        <!-- Modal Content -->
        <form class="modal-content animate">
          <div class="container">
            <label for="login"><b>Логин</b></label><br>
            <input type="text" placeholder="Введите логин" name="login" required><br>
      
            <label for="password"><b>Пароль</b></label><br>
            <input type="password" placeholder="Введите пароль" name="password" required><br>
            <a href="#">Забыли пароль?</a><br>
            
            <button type="submit" class="login_btn">Войти</button><br>
            <label><input type="checkbox" checked="checked" name="remember"> Remember me</label><br>
            <label>У вас нет аккаунта?  </label><a href='#' onclick="document.getElementById('auth').style.display='none'; document.getElementById('reg').style.display='block';">Зарегистрируйтесь</a>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('auth').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
    </div>

      <div id="reg" class="modal">
        <span onclick="document.getElementById('reg').style.display='none'" class="close" title="Close Modal">&times;</span>
      
        <form class="modal-content animate">
          <div class="container">
            
            <label for="reglogin"><b>Логин</b></label><br>
            <input type="text" placeholder="Введите логин" name="reglogin" required><br>
      
            <label for="email"><b>Email</b></label><br>
            <input type="email" placeholder="Введите почту" name="email" required><br>

            <label for="regpassword"><b>Пароль</b></label><br>
            <input type="password" placeholder="Введите пароль" name="regpassword" required><br>

            <label for="passwordrepeat"><b>Повторите пароль</b></label><br>
            <input type="password" placeholder="Повторите пароль" name="passwordrepeat" required><br>
            
            <input type="checkbox" name="newsseller"> <label for="passwordrepeat"><b>Получать новостную рассылку</b></label>
            
            <button type="submit" class="reg_btn">Зарегистрироваться</button>
            <label>У вас уже есть аккаунт?  </label><a href='#' onclick="document.getElementById('reg').style.display='none'; document.getElementById('auth').style.display='block';">Авторизируйтесь</a>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('reg').style.display='none'" class="cancelbtn">Отмена</button>
            <label class="msg"></label>
            </div>
        </form>
        </div>
      <script>
        // Get the modal
        var modal = document.getElementById('auth');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <script>
            // Get the modal
            var modal = document.getElementById('reg');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
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
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/main.js"></script>
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