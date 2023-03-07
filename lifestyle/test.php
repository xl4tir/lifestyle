<?php
// $a=1;
// $b=0;
// $c=3;
// $d=3;
// $i=0;
// $all=0;
//
//  $g= array('1' => $a,
//  '2' => $b,
//     '3' => $c,
//       '4' => $d);
//
//   foreach ($g as $key) {
//     $i++;
//     $all=$all+$key;
//     if($key==0){
//       $i--;
//     }
//   }
//
// echo $all/$key;

// if ($g[1]==0||
// $g[1]==1||
// $g[1]==2){
//
// }
//
// for ($i=1; $i < 5; $i++) {
//   if($g[$i]==''){
//       $g[$i] = 123;}
// }
//
//
//     echo $g[4];

  //
  // require_once 'mysql_connect.php';
  //
  // $sql= 'SELECT * FROM `add_marks` WHERE `login`= :login';
  // $query = $pdo->prepare($sql);
  // $query->execute(['login' => $_COOKIE['login']]);
  //
  // echo "<br>";
  // $user = $query->fetch(PDO::FETCH_ASSOC);
  // print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_OBJ);
  //   print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_NUM);
  //   print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_OBJ);
  //   print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_OBJ);
  // print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_OBJ);
  // print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_OBJ);
  // print_r($user);  echo "<br>";
  // $user = $query->fetch(PDO::FETCH_OBJ);
  // print_r($user);  echo "<br>";

  // while ( $marks = $query->fetch(PDO::FETCH_OBJ)) {
  //   $i++;
  //    $a[$i]=$marks;
  //
  //
  //
  // }
  //     print_r($a[1]->id);
  //
  //






      //   foreach ($query as $key) {
      //    $user = $key->fetch(PDO::FETCH_ASSOC);
      //    echo $user;
      // }


    ?>



            <!-- ------------------------------- --------------------------------------------- !-->

<br><br>
<br><br><br><br><br>
<?php
//
// require_once 'mysql_connect.php';
//
// $sql= 'SELECT * FROM `add_marks` WHERE `login`= :login &&  `marks_time`> :marks_time';
// $query = $pdo->prepare($sql);
// $query->execute(['login' => $_COOKIE['login'],'marks_time'=>  time()-2678400]);
//
// $i=0;
//
// while ( $marks = $query->fetch(PDO::FETCH_OBJ)) {
//   $i++;
//    $a[$i]=$marks;
//    print_r($marks);
// }

// $all= array('1' => 'sleep',
//                         '2' => 'gadgets',
//                       '3' => 'eat',
//                     '4' => 'school',
//                   '5' => 'addd',
//                 '6' => 'relax',
//               '7' => 'hobby',
//             '8' => 'sport',
//           '9' => 'walk',
//         '10' => 'higiene',
//       '11' => 'p_time',
//     '12' => 'circlee',
//   '13' => 'v_lessons',
// '14' => 'cleaning',
// '15' => 'practic',  );
//
//
// $alll = array('1' => $all );
//
// echo $alll[1][3];

   $a='13:32:00';

   $h = substr($a , 0,2);
   $m = substr($a , 3,2);

   $hours = ($h*60 + $m)/60;
   echo  number_format($hours, 1, ',', '')." год" ;






                 //
                 //
                 // for ($i=1; $i < 16 ; $i++) {
                 //   $hours = 0;
                 //   if($count[$i]==false){
                 //
                 //       $count[$i]=$count[$i];
                 //   }else {
                 //     for ($k=1; $k <= count($count[$i]) ; $k++) {
                 //       $h = substr($count[$i][$k] , 0,2);
                 //       $m = substr($count[$i][$k] , 3,2);
                 //
                 //       $hours = ($hours) + (($h*60 + $m)/60);
                 //
                 //     }
                 //   }
                 //
                 //     echo  '<br>'.number_format($hours, 1, ',', '')." год" ;
                 //     echo  '<br>';
                 // }
                 //
                 //
                 //

                echo 9.3*10;
                $all= array('1' => 'sleep',
                                        '2' => 'gadgets',
                                      '3' => 'eat',
                                    '4' => 'school',
                                  '5' => 'addd',
                                '6' => 'relax',
                              '7' => 'hobby',
                            '8' => 'sport',
                          '9' => 'walk',
                        '10' => 'higiene',
                      '11' => 'p_time',
                    '12' => 'circlee',
                  '13' => 'v_lessons',
                '14' => 'cleaning',
                '15' => 'practic',  );

print_r($all[2..15]);                

?>












<!--
$i=1;
$j=1;
$sleep_count = array();
  while(($a[$i]->sleep!="")){

  if($a[$i]->sleep!= '00:00:00'){
  echo $a[$i]->sleep .","." ";
  $sleep_count[$j] = $a[$i]->sleep;
  $j++;
}
$sleep_name = 'Сон';
$i++;
}
print_r($sleep_count);
echo ' - ' . $sleep_name . ")" -->
