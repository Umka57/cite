

$('.login_btn').on('click',function (event) {
    
    event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'includes/auth.php',
            dataType: 'json',
            data: {
                login: $('input[name="login"]').val(),
                password: $('input[name="password"]').val()
            },
            success (data) {
                if(data.status){
                    document.getElementById('auth').style.display='none';
                    // header("Location: ../index.php");
                } else {
                    document.getElementById('msg').style.display='block'.text(data.message);
                }
            }
        })
});

$('.reg_btn').on('click',function (event) {
    
    event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'includes/registr.php',
            dataType: 'json',
            data: {
                login: $('input[name="reglogin"]').val(),
                password: $('input[name="regpassword"]').val(),
                passwordrepeat: $('input[name="passwordrepeat"]').val(),
                email: $('input[name="email"]').val(),
                newsseller: $('input[name="newsseller"]').val()
            },
            success (data) {
                if(data.status){
                    alert('Регистрация прошла успешно');
                    document.getElementById('reg').style.display='none';
                } else {
                    document.getElementById('msg').style.display='block';
                    document.getElementById('msg').text(data.message);
                }
            }
        })
});
$('.edituser_btn').on('click',function (event) {
    
    event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'includes/edituser.php',
            dataType: 'json',
            data: {
                id: $('input[name="id"]').val(),
                login: $('input[name="editlogin"]').val(),
                password: $('input[name="editpassword"]').val(),
                email: $('input[name="editemail"]').val()
            },
            success (data) {
                if(data.status){
                    alert(data.message);
                    document.getElementById('edituser').style.display='none';
                } else {
                    document.getElementById('msg').style.display='block';
                    document.getElementById('msg').text(data.message);
                }
            }
        })
});
// $('#picture').on("input keyup",function (event){
//     document.getElementById('pictureprev').style.display='block';
//     document.getElementById('pictureprev').src = document.getElementById('picture').text();
// });
$('.addproduct_btn').on('click',function (event) {
    
    event.preventDefault();


    $.ajax({
        type: 'POST',
        url: 'includes/addproduct.php',
        dataType: 'json',
        data: {
        name: $('input[name="name"]').val(),
        price: $('input[name="price"]').val(),
        picture: $('input[name="picture"]').val()
    },
    success (data) {
        if(data.status){
            document.getElementById('addproduct').style.display='none';
        } else {
            document.getElementById('msg').style.display='block'.text(data.message);
        }
    }
    })
    });
    $('.adduser_btn').on('click',function (event) {
    
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'includes/adduser.php',
            dataType: 'json',
            data: {
            login: $('input[name="addlogin"]').val(),
            password: $('input[name="addpassword"]').val(),
            email: $('input[name="addemail"]').val()
        },
        success (data) {
            if(data.status){
                document.getElementById('adduser').style.display='none';
            } else {
                document.getElementById('msg').style.display='block'.text(data.message);
            }
        }
        })
});
function checkPassword(password) {
    var s_letters = "qwertyuiopasdfghjklzxcvbnm"; // Буквы в нижнем регистре
    var b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM"; // Буквы в верхнем регистре
    var digits = "0123456789"; // Цифры
    var specials = "!@#$%^&*()_-+=\|/.,:;[]{}"; // Спецсимволы
    var is_s = false; // Есть ли в пароле буквы в нижнем регистре
    var is_b = false; // Есть ли в пароле буквы в верхнем регистре
    var is_d = false; // Есть ли в пароле цифры
    var is_sp = false; // Есть ли в пароле спецсимволы
    for (var i = 0; i < password.length; i++) {
      /* Проверяем каждый символ пароля на принадлежность к тому или иному типу */
      if (!is_s && s_letters.indexOf(password[i]) != -1) is_s = true;
      else if (!is_b && b_letters.indexOf(password[i]) != -1) is_b = true;
      else if (!is_d && digits.indexOf(password[i]) != -1) is_d = true;
      else if (!is_sp && specials.indexOf(password[i]) != -1) is_sp = true;
    }
    var rating = 0;
    var totalrating = 0;
    var text = "";
    if (is_s) rating++; // Если в пароле есть символы в нижнем регистре, то увеличиваем рейтинг сложности
    if (is_b) rating++; // Если в пароле есть символы в верхнем регистре, то увеличиваем рейтинг сложности
    if (is_d) rating++; // Если в пароле есть цифры, то увеличиваем рейтинг сложности
    if (is_sp) rating++; // Если в пароле есть спецсимволы, то увеличиваем рейтинг сложности
    /* Далее идёт анализ длины пароля и полученного рейтинга, и на основании этого готовится текстовое описание сложности пароля */
    if (password.length < 6 && rating < 3) totalrating = 1;
    else if (password.length < 6 && rating >= 3) totalrating = 2;
    else if (password.length >= 8 && rating < 3) totalrating = 2;
    else if (password.length >= 8 && rating >= 3) totalrating = 3;
    else if (password.length >= 6 && rating == 1) totalrating = 1;
    else if (password.length >= 6 && rating > 1 && rating < 4) totalrating = 2;
    else if (password.length >= 6 && rating == 4) totalrating = 3;
    return totalrating; // Форму не отправляем
  }
  function TestLogin(login){
    let $message;
    if(/^[a-zA-Z1-9]+$/.test(login) === false){
        $message = 'В логине должны быть только латинские буквы';
    }
    if(login.length < 4 || login.length > 20){
        $message='В логине должен быть от 4 до 20 символов';
    }
    if(parseInt(login.substr(0, 1))){
        $message='Логине должен начинаться с буквы';
    }
    if(isEmpty($message))
    {
        $message='Ok';
    }
     return $message;
    }