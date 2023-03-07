
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


   <?php
     require 'blocks/header.php'?>

     <?php

    require_once 'mysql_connect.php';

     $sql= 'SELECT * FROM `about_users` WHERE `id`= :id';
     $query = $pdo->prepare($sql);
     $query->execute(['id' => ($_COOKIE['id']-38000)]);
    $about_user = $query->fetch(PDO::FETCH_OBJ);
    ?>

     <main class="container mt-5">
        <div class="row">
          <div class="col-md-8 mb-3">
            <h4>Про мене</h4>
            <form action="" method="post">

              <label for="dateb">Дата народження</label>
              <?php  echo "<input value='$about_user->dateb' type='date' name='dateb' id='dateb' class='form-control'>" ?>

              <label for="country">Країна</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" class="form-control" name="country" id="country">
                <?// echo "<option value='$about_user->country'>$about_user->country</option>"?>
                <option value="-">-</option>
                <option value="Україна">Україна</option>
                <option value="Росія">Росія</option>
                <option value="Білорусь">Білорусь</option>
                <? //if(($about_user->country)!="-"){
                  //echo "<option value='-'>-</option>"};
                ?>

              </select>

              <label for="region">Область</label>
              <?php  echo "<input value='$about_user->region' type='text' name='region' id='region' class='form-control'>" ?>

              <label for="school">Навчальний заклад</label>
              <?php  echo "<input value='$about_user->school' type='text' name='school' id='school' class='form-control'>" ?>


              <button type="button" class="btn btn-success mt-3" id="refresh">Оновити дані!</button>
            </form>
          </div>
        <?php require 'blocks/aside.php'?>
        </div>
     </main>


     <?php require 'blocks/footer.php';
     ?>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
         $('#refresh').click(function (){
         var  dateb = $('#dateb').val();
         var  country = $('#country').val();
         var  region = $('#region').val();
         var  school = $('#school').val();


         $.ajax({
           url: 'ajax/aboutme.php',
           type: 'POST',
           cache: false,
           data :({'dateb' : dateb, 'country' : country, 'region' : region, 'school' : school}),
           dataType: 'html',
           success: function(data) {
             if(data == 'Готово'){
               $('#refresh').text('Оновлено!');

             }
           }
         });
       });
     </script>

 </body>
 </html>
