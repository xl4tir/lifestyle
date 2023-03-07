<?php
   if(isset($_COOKIE['login'])==''){
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
    <a class="nav-link active  text-danger" href="analysis-1.php" >Середня оцінка</a>
  </li>
  <li class="nav-item" >
    <a class="nav-link  text-dark" href="analysis-2.php" >Проведений час</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="analysis-3.php">Double Аналіз</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="analysis-4.php" >Disabled</a>
  </li>
</ul>
  </nav>
                    <?php
                    require_once 'mysql_connect.php';

                    $sql= 'SELECT * FROM `add_marks` WHERE `login`= :login &&  `mark_time`> :mark_time';
                    $query = $pdo->prepare($sql);
                    $query->execute(['login' => $_COOKIE['login'],'mark_time'=>  time()-2678400]);

                    $i=0;

                    while ( $marks = $query->fetch(PDO::FETCH_OBJ)) {
                      $i++;
                       $a[$i]=$marks;
                    }

                      $m_mova=0;
                      $m_litr=0;
                      $m_fore=0;
                      $m_phi=0;
                      $m_che=0;
                      $m_art=0;
                      $m_hist=0;
                      $m_math=0;
                      $m_it=0;
                      $m_pe=0;
                     ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="mt-4 text-center" > <h3>Середня оцінка</h3></div>

              <table class="table mt-4">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Предмет</th>
                        <th scope="col">Оцінки</th>
                        <th scope="col">Середня</th>


                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Мова</td>
                        <td><?php
                          $a_count=0;
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->Mova!="")){

                            if($a[$i]->Mova>0){
                            echo $a[$i]->Mova .","." ";
                            $sum=$sum+$a[$i]->Mova;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_mova=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };
                        ?></td>
                      </tr>


                      <tr>
                        <th scope="row">2</th>
                        <td>Література</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->liter!="")){

                            if($a[$i]->liter>0){
                            echo $a[$i]->liter .","." ";
                            $sum=$sum+$a[$i]->liter;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_litr=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">3</th>
                        <td>Іноземна мова</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->foreignn!="")){

                            if($a[$i]->foreignn>0){
                            echo $a[$i]->foreignn .","." ";
                            $sum=$sum+$a[$i]->foreignn;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_fore=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">4</th>
                        <td>Фізика</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->phisic!="")){

                            if($a[$i]->phisic>0){
                            echo $a[$i]->phisic .","." ";
                            $sum=$sum+$a[$i]->phisic;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_phi=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">5</th>
                        <td>Хімія</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->chemistry!="")){

                            if($a[$i]->chemistry>0){
                            echo $a[$i]->chemistry .","." ";
                            $sum=$sum+$a[$i]->chemistry;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_che=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">6</th>
                        <td>Мистецтво</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->art!="")){

                            if($a[$i]->art>0){
                            echo $a[$i]->art .","." ";
                            $sum=$sum+$a[$i]->art;
                            $count++;}

                            $i++;


                          }

                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_art=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };
                    ?></td>
                      </tr>


                      <tr>
                        <th scope="row">7</th>
                        <td>Історія</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->history!="")){

                            if($a[$i]->history>0){
                            echo $a[$i]->history .","." ";
                            $sum=$sum+$a[$i]->history;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_hist=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">8</th>
                        <td>Математика</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->math!="")){

                            if($a[$i]->math>0){
                            echo $a[$i]->math .","." ";
                            $sum=$sum+$a[$i]->math;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_math=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">9</th>
                        <td>Інформатика</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->it!="")){

                            if($a[$i]->it>0){
                            echo $a[$i]->it .","." ";
                            $sum=$sum+$a[$i]->it;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_it=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>


                      <tr>
                        <th scope="row">10</th>
                        <td>Фізична культура</td>
                        <td><?php
                          $i=1;
                          $sum=0;
                          $count=0;
                          while(($a[$i]->pe!="")){

                            if($a[$i]->pe>0){
                            echo $a[$i]->pe .","." ";
                            $sum=$sum+$a[$i]->pe;
                            $count++;}

                            $i++;


                          }
                          if($count==0){
                            echo "---";
                          };
                        ?>
                      </td>
                        <td>
                          <?php
                          if($count>0){
                          echo "(".number_format($sum/$count, 1, ',', '').')' ." - ".round($sum/$count);
                          $m_pe=number_format($sum/$count, 1, '.', '');
                          $a_count++;
                        }
                        if($count==0){
                          echo "---";

                        };?></td>
                      </tr>

                    </tbody>
              </table>
              <br>
              <table>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Середній бал по предметам:</th>
                    <th scope="col"><?php if($a_count>0){$av_m = (($m_mova+$m_litr+$m_fore+$m_phi+$m_che+$m_art+$m_hist+$m_math+$m_it+$m_pe)/$a_count);
                        echo "(".number_format($av_m, 1, '.', '').")";
                    }else{
                        echo "---";
                    };
                    ?></th>
                    <th scope="col">балів</th>



                  </tr>
                </thead>

              </table>
              <br>
               <center> <div id="air" style="width: 500px; height: 400px;"></div></center>

            </div>
        </div>

    <?php require 'blocks/footer.php';  ?>
    <!-- -------------------------------------------------------------------------------- -->

  <script src="https://www.google.com/jsapi"></script>
  <script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Предмет', 'Оцінка'],
     ['Мова',   <?php echo $m_mova?>],
     ['Література', <?php echo $m_litr?>],
     ['Іноземна мова',   <?php echo $m_fore?>],
     ['Фізика',<?php echo $m_phi?>],
     ['Хімія',<?php echo $m_che?>],
     ['Мистецтва',<?php echo $m_art?>],
     ['Історія',<?php echo $m_hist?>],
     ['Математика',<?php echo $m_math?>],
     ['Інформатика',<?php echo $m_it?>],
     ['Фізкультура',<?php echo $m_pe?>]
    ]);
    var options = {
     title: 'Оцінки в середньому',
     is3D: true,
     pieResidueSliceLabel: 'Інші'
    };
    var chart = new google.visualization.PieChart(document.getElementById('air'));
     chart.draw(data, options);
   }
  </script>


  <!-- ------------------------------------------------------------------------------------------------------- -->
</body>
</html>
