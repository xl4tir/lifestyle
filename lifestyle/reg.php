<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
   $head_title="Реєстрація на сайті";
   require 'blocks/head.php'?>
</head>
<body>

 <?php require 'blocks/header.php'?>

<main class="container mt-5">
   <div class="row">
     <div class="col-md-8 mb-3">
       <h4>Форма для реєстрації</h4>
       <form action="" method="post">
         <label for="username">Ваше ім'я</label>
         <input type="text" name="username" id="username" class="form-control">

         <label for="email">Email</label>
         <input type="email" name="email" id="email" class="form-control">

         <label for="login">Логін</label>
         <input type="text" name="login" id="login" class="form-control">

         <label for="pass">Пароль</label>
         <input type="password" name="pass" id="pass" class="form-control">

         <div class="alert alert-danger mt-2" id="errorBlock"></div>

         <button type="button" class="btn btn-success mt-3" id="reg_user">Зареєструватися!</button>
       </form>
     </div>
   <?php require 'blocks/aside.php'?>
   </div>
</main>

 <?php require 'blocks/footer.php'?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('#reg_user').click(function (){
    var  name = $('#username').val();
    var  email = $('#email').val();
    var  login = $('#login').val();
    var  pass = $('#pass').val();

    $.ajax({
      url: 'ajax/reg.php',
      type: 'POST',
      cache: false,
      data :({'username' : name, 'email' : email, 'login' : login, 'pass' : pass}),
      dataType: 'html',
      success: function(data) {
        if(data == 'Готово'){
          $('#reg_user').text('Все готово!');
          $('#errorBlock').hide();
           location.replace("auth.php");
        }else{
          $('#errorBlock').show();
          $('#errorBlock').text(data);
        }
      }
    });
  });
</script>

</body>
</html>
