<?php
  $username=trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $email=trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $login=trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass=trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  $error='';



  if (strlen($username) <=3){
    $error = 'Введіть ім\'я!';
  } else if (strlen($email) <=3){
    $error = 'Введіть Email!';
  }else if(strpos($email, "@")<1 ){
    $error = "Введіть Email із символом '@' ";
  } else if (strlen($login) <=3){
    $error = 'Введіть логін!';
  } else if (strlen($pass) <=3){
    $error = 'Введіть пароль!';
  }
  if($error != ''){
    echo $error;
   exit();
  }


if($_COOKIE['reg']=='192.178.l01.l'){
  echo "Ви уже реєструвалися на цьому веб-сайті...";
  exit();
}

  $pass=md5($pass);

  require_once '../mysql_connect.php';



    $sql= 'SELECT `login`, `email` FROM `users`';
    $query = $pdo->query($sql);
    while($user = $query->fetch(PDO::FETCH_OBJ)){

      if(($user->login)==""){
        break;
      }

      if (($user->login)==$login){
        $error = "Користувач із таким логіном уже існує!";
        echo $error;
        exit();
      }else if (($user->email)==$email) {
        $error = "Користувач із таким Email уже існує!";
        echo $error;
        exit();
      }
    }


  $sql = 'INSERT INTO users(name, email, login, pass) VALUES(?,?,?,?)';
  $query = $pdo->prepare($sql);
  $query->execute([$username,$email,$login,$pass]);
  setcookie('reg', '192.178.l01.l', time() + 3600*24, "/");

  $sql= 'SELECT `id` FROM `users` WHERE `login`= :login';
  $query = $pdo->prepare($sql);
  $query->execute(['login' => $login]);
  $idd = $query->fetch(PDO::FETCH_OBJ);

  $sql = 'INSERT INTO about_users(id, dateb, country, region, school) VALUES(?,?,?,?,?)';
  $query = $pdo->prepare($sql);
  $query->execute([$idd->id,'00-00-0000','-','-','-']);
  echo 'Готово';
  ?>
