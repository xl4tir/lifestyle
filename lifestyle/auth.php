
<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
   $head_title="Авторизація на сайті";
   require 'blocks/head.php'?>
</head>
<body>

 <?php require 'blocks/header.php'?>

<main class="container mt-5">
   <div class="row">
     <div class="col-md-8 mb-3">
       <?php
          if($_COOKIE['login'] == ''):
       ?>
       <h4>Форма для авторизація</h4>
       <form action="" method="post">

         <label for="login">Логін</label>
         <input type="text" name="login" id="login" class="form-control">

         <label for="pass">Пароль</label>
         <input type="password" name="pass" id="pass" class="form-control">

         <div class="alert alert-danger mt-2" id="errorBlock"></div>

         <button type="button" class="btn btn-success mt-3" id="auth_user">Увійти!</button>
       </form>
       <?php
          else:
       ?>
       <h2><?=$_COOKIE['login']?></h2>
       <?php
         require 'mysql_connect.php';

       $sql= 'SELECT `id`, `name`, `email`, `login`, `pass` FROM `users` WHERE `login`= :login';
       $query = $pdo->prepare($sql);
       $query->execute(['login' => $_COOKIE['login']]);
      $user = $query->fetch(PDO::FETCH_OBJ);
      echo "<br><br><br>";
      echo  "<p><b>Ваше id:</b>  380$user->id </p>";
      echo  "<p><b>Ваше ім'я:</b>  $user->name </p>";
      echo  "<p><b>Ваш Email:</b>  $user->email </p>";
      echo  "<p><b>Ваш псевдонім:</b>  $user->login </p>";
        echo "<br><br><br>";
       ?>
       <button class="btn btn-info mr-5" id="edit-btn"  type="button"  data-toggle="modal" data-target="#exampleModal" >Редагувати</button>
       <button class="btn btn-danger" id="exit-btn">Вийти</button>

       <?php
          endif;
       ?>
     </div>
   <?php require 'blocks/aside.php'?>
   </div>
</main>

 <?php require 'blocks/footer.php'?>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
    $('#auth_user').click(function (){
    var  login = $('#login').val();
    var  pass = $('#pass').val();

    $.ajax({
      url: 'ajax/auth.php',
      type: 'POST',
      cache: false,
      data :({'login' : login, 'pass' : pass}),
      dataType: 'html',
      success: function(data) {
        if(data == 'Готово'){
          $('#auth_user').text('Все готово!');
          $('#errorBlock').hide();
          document.location.reload(true);
        }else{
          $('#errorBlock').show();
          $('#errorBlock').text(data);
        }
      }
    });
  });


  $('#exit-btn').click(function (){

  $.ajax ({
    url: 'ajax/exit.php',
    type: 'POST',
    cache: false,
    data :({}),
    dataType: 'html',
    success: function(data) {
       document.location.reload(true);
    }
  });
});
</script>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Форма для редагування</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">

        <label for="username">Ваше ім'я</label>
        <input type="text" name="username" id="username" class="form-control" value="<?=$user->name?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?=$user->email?>">

        <label for="login">Логін (псевдонім)</label>
        <input type="text" name="login" id="login" class="form-control" value="<?=$user->login?>">

        <label for="old_pass">Старий пароль</label>
        <input type="password" name="old_pass" id="old_pass" class="form-control" >

        <label for="new_pass">Новий пароль (або старий якщо не змінюєте)</label>
        <input type="password" name="new_pass" id="new_pass" class="form-control">

        <div class="alert alert-danger mt-2" id="errorBlock"></div>

        <button type="button" class="btn btn-success mt-5 " id="edit_user">Редагувати!</button>
      </form>
    </div>
   </div>
 </div>
</div>


<script>
    $('#edit_user').click(function (){
      var  name = $('#username').val();
      var  email = $('#email').val();
      var  login = $('#login').val();
      var  old_pass = $('#old_pass').val();
      var  new_pass = $('#new_pass').val();

    $.ajax({
      url: 'ajax/edit.php',
      type: 'POST',
      cache: false,
      data :({'username' : name, 'email' : email, 'login' : login, 'old_pass' : old_pass, 'new_pass' : new_pass}),
      dataType: 'html',
      success: function(data) {
        if(data == 'Готово'){
          $('#edit_user').text('Все готово!');
          $('#errorBlock').hide();

          $.ajax ({
            url: 'ajax/exit.php',
            type: 'POST',
            cache: false,
            data :({}),
            dataType: 'html',
            success: function(data) {
               document.location.reload(true);
            }
          });


          location.reload()
        }else{
          $('#errorBlock').show();
          $('#errorBlock').text(data);
        }
      }
    });
  });

  </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
