<!DOCTYPE html>
<html lang="en">

<head>
    <?php $head_title="Lifestyle";
  require 'blocks/head.php'?>

</head>

<body>
    <?php

    require 'blocks/header.php'?>
    <div class="container">
        <div class="row">

            <div class="col">
                <br>
                <ul class="list-unstyled">
                    <div id="accordion">

                    </div>
                    <?php
         require_once 'mysql_connect.php';

         $sql= 'SELECT * FROM `articles` ORDER BY `date` DESC';
         $query = $pdo->query($sql);
         while($row = $query->fetch(PDO::FETCH_OBJ)){
           //echo "<center><a href='/news.php?id=$row->id'  style='text-decoration:none; color:black;'><h3>$row->title </h3></a></center> ";
          // echo "<center><p>$row->intro</p></center>";
          // echo "<center><a href='/news.php?id=$row->id' title='$row->title'><button class='btn btn-outline-danger mb-5'>Прочитати більше...</button></a></center>";
            $i++;
                  echo "<li class='media shadow-lg p-3 mb-4 bg-white rounded-lg' data-toggle='collapse' data-target='#collapse-$i' aria-expanded='true' aria-controls='collapse-$i' style='cursor:pointer;'>
                    <img width='64px' src='img/info.png' class='mr-3' alt='info'>
                    <div class='media-body'>
                      <h5 class='mt-0 mb-1' class='btn btn-link'>$row->title</h5>
                         <p class='font-weight-lighter'>$row->intro</p> </div>

                  </li>
                  <div id='collapse-$i' class='collapse' aria-labelledby='headingOne' data-parent='#accordion'>
                    <div class='card-body'>
                      $row->text
                    </div>
                  </div>";

         };
       ?>


                </ul>
            </div>

            <div class="col-6">
                <img width="100%" src="img/index.png" alt="Responsive image">
                <img width="100%" src="img/index-1.png" alt="photo">
                <img width="100%" src="img/index-2.png" alt="photo">





            </div>
        </div>
    </div>
    <br>
    <br> <br>



    <?php require 'blocks/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script><br>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script><br>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
