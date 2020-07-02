
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <?
                $user = (isset($_SESSION['user'])) ? $_SESSION['user'] : NULL;
                if($user!=NULL){
                    echo "<a href=\"lk.php\" title=\"",$_SESSION['user']['login'],"\" id=\"autentif\">",$_SESSION['user']['login'],"</a>";
                } else {
                    echo "<a href=\"#\" title=\"Авторизация\" onclick=\"document.getElementById('auth').style.display='block'\" id=\"autentif\">Авторизация</a>";
                }
            ?>

            <!-- <a href="#" title="Корзина" onclick="slowScroll('#cart')">Корзина</a> -->
        </div>
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
</header>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>