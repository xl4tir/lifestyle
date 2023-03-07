<?php
  $login=trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass=trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  $error='';
   if (strlen($login) <=3){
    $error = 'Введіть логін!';
  } else if (strlen($pass) <=3){
    $error = 'Введіть пароль!';
  }

  if($error != ''){
    echo $error;
    exit();
  }


  $pass=md5($pass);

  require_once "../mysql_connect.php";

  $sql = 'SELECT `id` FROM `users` WHERE `login` = :login && `pass` = :pass';
  $query = $pdo->prepare($sql);
  $query->execute(['login' => $login, 'pass' => $pass]);

  $user = $query->fetch(PDO::FETCH_OBJ);
  if($user->id == 0){
    echo "Не вірний логін або пароль!";
  }else{
    setcookie('login', $login, time() + 3600*24*30, "/");
    setcookie('id', '380'.$user->id, time() + 3600*24*30, "/");
    echo 'Готово';
   }


  ?>
