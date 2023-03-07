<?php
 // $q= $_POST['mova'];
 // $w = $_POST['liter'];
 // $e = $_POST['foreign'];
 // $r = $_POST['phisic'];
 // $t = $_POST['chemistry'];
 // $y = $_POST['art'];
 // $u = $_POST['history'];
 // $i = $_POST['math'];
 // $o = $_POST['it'];
 // $p = $_POST['pe'];

 $arr = array('1' => $_POST['mova'],
                      '2' => $_POST['liter'],
                      '3' =>$_POST['foreign'] ,
                      '4' => $_POST['phisic'],
                      '5' => $_POST['chemistry'],
                      '6' =>$_POST['art'],
                      '7' => $_POST['history'],
                      '8' =>$_POST['math'] ,
                      '9' => $_POST['it'],
                      '10' => $_POST['pe']);

                      for ($i = 1; $i <= 10; $i++) {
                          if($arr[$i] == 1 ||
                          $arr[$i] == 2 ||
                          $arr[$i] == 3 ||
                          $arr[$i] == 4||
                          $arr[$i] == 5 ||
                          $arr[$i] == 6 ||
                          $arr[$i] == 7 ||
                          $arr[$i] == 8 ||
                          $arr[$i] == 9 ||
                          $arr[$i] == 10 ||
                          $arr[$i] == 11 ||
                          $arr[$i] == 12 ||
                          $arr[$i] == '' ){
                           continue;
                         }else{
                           echo "Нажаль в наборі даних ви не дотрималися певних правил... Оцінки повинні бути від 1 до 12 написані цифрою!";
                           exit();
                         };

                      }
                      for ($i=1; $i <=10 ; $i++) {
                        if($arr[$i]==''){
                            $arr[$i] = 0;
                        }else {
                          continue;
                        }
                      }


        require_once "../mysql_connect.php";

        $sql = 'INSERT INTO add_marks(Mova, liter, foreignn, phisic, chemistry, art, history, math, it, pe, login, mark_time) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)';
        $query = $pdo->prepare($sql);
        $query->execute([$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6],$arr[7],$arr[8],$arr[9],$arr[10], $_COOKIE['login'], time() ]);


echo "Готово"
?>
