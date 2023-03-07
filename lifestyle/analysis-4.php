<?php
   if($_COOKIE['login']==''){
     header('Location:/reg.php');
     exit();
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $head_title="Lifestyle";
  require 'blocks/head.php'?>
</head>
<body>
  <?php  require 'blocks/header.php';?>
  <nav>
    <ul class="nav nav-tabs justify-content-center"  >
  <li class="nav-item" >
    <a class="nav-link text-dark" href="analysis-1.php" >Середня оцінка</a>
  </li>
  <li class="nav-item" >
    <a class="nav-link text-dark" href="analysis-2.php" >Проведений час</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="analysis-3.php">Double Аналіз</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active " href="analysis-4.php" >Disabled</a>
  </li>
</ul>
  </nav>


    <?php require 'blocks/footer.php';  ?>
</body>
</html>
