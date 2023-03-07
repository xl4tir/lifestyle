<?php
  setcookie('login', "", time() - 3600*24*30, "/");
  setcookie('id',"", time() - 3600*24*30, "/");
  unset($_COOKIE['id']);
  unset($_COOKIE['login']);
  echo true;
?>
