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
    <a class="nav-link active text-danger" href="analysis-3.php">Double Аналіз</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="analysis-4.php" >Disabled</a>
  </li>
</ul>
  </nav>

  <!-- -----------------------------------------------php------------------------------------------------------------ -->
           <?php

           $a=0;
           $a=array();
               require_once 'mysql_connect.php';
             $sql= 'SELECT * FROM `add_time` WHERE `login`= :login';
             $query = $pdo->prepare($sql);
             $query->execute(['login' => $_COOKIE['login']]);
             $i=0;

             while ( $times = $query->fetch(PDO::FETCH_OBJ)) {
               $i++;
                $a[$i]=$times;

             }

        $i=1;
           $all= array('1' => $a[$i]->sleep,
                                   '2' => $a[$i]->gadgets,
                                 '3' => $a[$i]->eat,
                               '4' => $a[$i]->school,
                             '5' => $a[$i]->addd,
                           '6' => $a[$i]->relax,
                         '7' => $a[$i]->hobby,
                       '8' => $a[$i]->sport,
                     '9' => $a[$i]->walk,
                   '10' => $a[$i]->higiene,
                 '11' => $a[$i]->p_time,
               '12' => $a[$i]->circlee,
             '13' => $a[$i]->v_lessons,
           '14' => $a[$i]->cleaning,
         '15' => $a[$i]->practic );


            $u=1;

             for ($k=1; $k <16 ; $k++) {
                          $i=1;
                             $j=1;
                                 $hours = 0;
                               while(($all[$k]!="")){

                               if($all[$k]!= '00:00:00'){
                               $count[$u][$j] = $all[$k];





                               $h = substr($count[$u][$j] , 0,2);
                               $m = substr($count[$u][$j] , 3,2);

                               $hours= ($hours) + (($h*60 + $m)/60);





                               $j++;
                             }


                               $all_hours[$k] = number_format(($hours)*10, 0, ',', '');

                                $i++;
                             $all= array('1' => $a[$i]->sleep,
                                                     '2' => $a[$i]->gadgets,
                                                   '3' => $a[$i]->eat,
                                                 '4' => $a[$i]->school,
                                               '5' => $a[$i]->addd,
                                             '6' => $a[$i]->relax,
                                           '7' => $a[$i]->hobby,
                                         '8' => $a[$i]->sport,
                                       '9' => $a[$i]->walk,
                                     '10' => $a[$i]->higiene,
                                   '11' => $a[$i]->p_time,
                                 '12' => $a[$i]->circlee,
                               '13' => $a[$i]->v_lessons,
                             '14' => $a[$i]->cleaning,
                           '15' => $a[$i]->practic );


                         }
                         $u++;
                           $i=1;
                         $all= array('1' => $a[$i]->sleep,
                                                 '2' => $a[$i]->gadgets,
                                               '3' => $a[$i]->eat,
                                             '4' => $a[$i]->school,
                                           '5' => $a[$i]->addd,
                                         '6' => $a[$i]->relax,
                                       '7' => $a[$i]->hobby,
                                     '8' => $a[$i]->sport,
                                   '9' => $a[$i]->walk,
                                 '10' => $a[$i]->higiene,
                               '11' => $a[$i]->p_time,
                             '12' => $a[$i]->circlee,
                           '13' => $a[$i]->v_lessons,
                         '14' => $a[$i]->cleaning,
                       '15' => $a[$i]->practic );



             }

              $names = array('1' => 'Сон',
                              '2' => 'Гаджети',
                            '3' => 'Їжа',
                          '4' => 'Навчальний заклад',
                        '5' => 'Додаткові заняття',
                      '6' => 'Відпочинок',
                    '7' => 'Хоббі',
                  '8' => 'Спорт',
                '9' => 'Прогулянки',
              '10' => 'Власна гігієна',
            '11' => 'Підзаробіток',
          '12' => 'Гурток',
        '13' => 'Відеоуроки',
      '14' => 'Прибирання',
    '15' => 'Практика вивченого' );


               for ($i=1; $i <=15 ; $i++) {
                 if((strpos($all_hours[$i], max($all_hours)))===0){
                   $imax=$i;}
                  if((strpos($all_hours[$i], min($all_hours)))===0){
                     $imin=$i;}

                 }
                 $all_hours2=$all_hours;
                $all_hours2[$imax]= 0;

                for ($i=1; $i <=15 ; $i++) {
                  if((strpos($all_hours2[$i], max($all_hours2)))===0){
                    $imax2=$i;}

                  }


           ?>



  <!-- -----------------------------------------------end-php------------------------------------------------------------ -->

 <?php
 echo $all_hours[2]."<br>";
 echo max($all_hours2);
 if(max($all_hours2)==$all_hours[2]){
   echo "Ви дуже багато часу використовуєте на різного роду <b>Гаджети</b>, а саме - " . max($all_hours2)/10 . " годин.
   Це може привести до поганих наслідків, як хвороби хребта, проблеми із зором, Тунельний синдром.
   Радимо більше часу використовувати на <b>Спорт, ДЗ, Хоббі, Навчання, Саморозвиток!</b> <b><i>Успіху вам та прогресу!</b></i>";
 }
 ?>
    <?php require 'blocks/footer.php';  ?>
</body>
</html>
