<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm navbar navbar-expand-lg navbar-dark bg-dark">
<a style="text-decoration:none; color: red;" class="my-0 mr-md-auto font-weight-normal" href="/"><h5 class="my-0 mr-md-auto font-weight-normal">Lifestyle</h5></a>
<nav class="my-2 my-md-0 mr-md-3">
  <a class="p-2 text-white" href="/">Головна</a>
  <?php
     if($_COOKIE['login'] != ''){
      echo '<a class="p-2 text-white" href="add_date.php">Додати дані</a>';
      echo '<a class="p-2 text-white" href="analysis-1.php">Аналіз</a>';
      echo '<a class="p-2 text-white" href="aboutme.php">Про мене</a>';

    }
  ?>
  <a class="p-2 text-white" href="/contacts.php">Контакти</a>
</nav>
<?php
   if($_COOKIE['login'] == ''):
?>
<a  class="btn btn-outline-success mr-2 mb-2" href="/auth.php">Увійти</a>
<a  class="btn btn-outline-warning mb-2" href="/reg.php">Реєстрація</a>
<?php
else:
?>
 <a class="btn btn-outline-danger mr-2 mb-2" href="/auth.php">Мій кабінет</a>
 <?php
endif;
 ?>
</div>
