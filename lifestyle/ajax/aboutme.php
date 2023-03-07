<?php

  $country=trim($_POST['country']);
  $region=trim($_POST['region']);
  $school=trim($_POST['school']);

  $new_date = date('Y-m-d', strtotime($_POST['dateb']));



  require_once '../mysql_connect.php';
   $myid=($_COOKIE['id']-38000);

    $sql = 'UPDATE `about_users` SET  `dateb` = :dateb, `country` = :country, `region` = :region, `school` = :school WHERE `id` = :idnow';
    $query = $pdo->prepare($sql);
    $query->execute(['dateb' => $new_date, 'country' => $country, 'region' => $region,'school' => $school, 'idnow' => $myid]);
   echo 'Готово';



  ?>
