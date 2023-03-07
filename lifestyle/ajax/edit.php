<?php

    $username=trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
    $email=trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login=trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $old_pass=trim(filter_var($_POST['old_pass'], FILTER_SANITIZE_STRING));
    $new_pass=trim(filter_var($_POST['new_pass'], FILTER_SANITIZE_STRING));


  $error='';
   if (strlen($username) <=3){
    $error = 'Введіть ім\'я!';
  } else if (strlen($email) <=3){
    $error = 'Введіть Email!';
  }else if (strlen($login) <=3){
    $error = 'Введіть логін!';
  }else if (strlen($old_pass) <=3){
   $error = 'Введіть старий пароль!';
  }else if (strlen($new_pass) <=3){
    $error = 'Введіть новий пароль!';
  }

  if($error != ''){
    echo $error;

  }


  $old_pass=md5($old_pass);
  $new_pass=md5($new_pass);

  require_once "../mysql_connect.php";

  $myid = substr($_COOKIE['id'] , 3);

  $sql = 'SELECT `pass` FROM `users` WHERE `login` = :login';
  $query = $pdo->prepare($sql);
  $query->execute(['login' => $_COOKIE['login']]);

  $user_p = $query->fetch(PDO::FETCH_OBJ);

    if($old_pass == ($user_p->pass)){



  $sql = 'UPDATE `users` SET  `name` = :username, `email` = :email, `login` = :login, `pass` = :newpass WHERE `id` = :idnow';
  $query = $pdo->prepare($sql);
  $query->execute(['username' => $username, 'email' => $email, 'login' => $login,'newpass' => $new_pass, 'idnow' => $myid]);
 echo 'Готово';



  }else {
    echo "Не вірно введений старий пароль!";
  }





  ?>
