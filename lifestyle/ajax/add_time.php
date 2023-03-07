<?php

          $arr = array('1' => $_POST['sleep'],
                               '2' => $_POST['gadgets'],
                               '3' =>$_POST['eat'] ,
                               '4' => $_POST['school'],
                               '5' => $_POST['add'],
                               '6' =>$_POST['relax'],
                               '7' => $_POST['hobby'],
                               '8' =>$_POST['sport'] ,
                               '9' => $_POST['walk'],
                               '10' => $_POST['higiene'],
                               '11' => $_POST['p_time'],
                               '12' =>$_POST['circle'] ,
                               '13' => $_POST['v_lessons'],
                               '14' => $_POST['cleaning'],
                               '15' => $_POST['practic']);




                               require_once "../mysql_connect.php";

                              $sql = 'INSERT INTO add_time(sleep, gadgets, eat, school, addd, relax, hobby, sport, walk, higiene, p_time, circlee, v_lessons, cleaning, practic, login) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
                               $query = $pdo->prepare($sql);
                              $query->execute([$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10],$arr[11],$arr[12],$arr[13],$arr[14],$arr[15], $_COOKIE['login'] ]);

//echo '$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10],$arr[11],$arr[12],$arr[13],$arr[14],$arr[15]';


 echo "Готово";
?>
