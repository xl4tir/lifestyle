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

    <main class=" mt-5">
        <div class="row justify-content-center">
            <div class="col-4 mb-3">
                <h4>Оцінки за предмети</h4>
                <p style="font-size: 13px ">(Якщо нема оцінки, пропускаєте пункт)</p>
                <div class="mt-3">


                    <form action="" method="post">

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Мова</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="mova" name="mova" >
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Література</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="liter" name="liter">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Іноземна мова</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="foreign" name="foreign">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Фізика</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="phisic" name="phisic">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Хімія</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="chemistry" name="chemistry">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Мистецтво</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="art" name="art">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Історія</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="history" name="history">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Математика</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="math" name="math">
                        </div>


                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Інформатика</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="it" name="it">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Фізична культура</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="pe" name="pe">
                        </div>




                    <!--  <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Новий предмет...">
                            <p>Ви можете вписати новий предмет, якого тут невистачає, а ми з часом покращимо наш проект.</p>
                            <p><b>Дякую!</b></p>
                        </div>!-->


                        <div class="alert alert-danger mt-2" id="errorBlock"></div>

                        <button type="button" class="btn btn-success mt-3" id="add_marks">Додати!</button>
                    </form>
                </div>
            </div>

            <!--   -------------------------------------------------Дргуа колонка --------------------------------     !-->

            <div class="col-4 mb-3">
            <h4>Час, витрачений на:</h4>
            <p style="font-size: 13px ">(Якщо нема, пропускаєте пункт)</p>


            <form action="" method="post">

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Сон</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="sleep" name="sleep" value="00:00" >
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Гаджети(ігри, фільми, соц-мережі)</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="gadgets" name="gadgets" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Їжа</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="eat" name="eat" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Навчальний заклад</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="school" name="school" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Додаткові заняття</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="add" name="add" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Відпочинок</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="relax" name="relax" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Хоббі</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="hobby" name="hobby" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Спорт</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="sport" name="sport" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Прогулянки</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="walk" name="walk" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Власна гігієна</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="higiene" name="higiene" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Підзаробіток</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="p_time" name="p_time" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Гурток</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="circle" name="circle" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Відеоуроки</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="v_lessons" name="v_lessons" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Прибирання</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm"  id="cleaning" name="cleaning" value="00:00">
              </div>

              <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Практика вивченого</span>
                  </div>
                  <input type="time" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-sm" name="practic" id="practic"  value="00:00">
              </div>




              <!--  <div class="input-group mb-3 plus-new">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Новий вид...">
                    <p>Ви можете вписати новий вид, якого тут невистачає, а ми з часом покращимо наш проект.</p>
                    <p><b>Дякую!</b></p>
                </div> !-->


                <div style="display:none " class="alert alert-danger mt-2" id="errorBlock2"></div>

                <button type="button" class="btn btn-success mt-3" id="add_time">Додати!</button>
            </form>
          </div>
        </div>
    </main>


    <?php require 'blocks/footer.php';

     ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
         $('#add_marks').click(function (){
           var  mova = $('#mova').val();
           var  liter = $('#liter').val();
           var  foreign = $('#foreign').val();
           var  phisic = $('#phisic').val();
           var  chemistry = $('#chemistry').val();
           var  art = $('#art').val();
           var  history = $('#history').val();
           var  math = $('#math').val();
           var  it = $('#it').val();
           var  pe = $('#pe').val();

         $.ajax({
           url: 'ajax/add_marks.php',
           type: 'POST',
           cache: false,
           data :({'mova' : mova, 'liter' : liter, 'foreign' : foreign, 'phisic' : phisic, 'chemistry' : chemistry, 'art' : art, 'history' : history, 'math' : math, 'it' : it, 'pe' : pe }),
           dataType: 'html',
           success: function(data) {
             if(data == 'Готово'){
               $('#add_marks').text('Все готово!');
               $('#errorBlock').hide();

             }else{
               $('#errorBlock').show();
               $('#errorBlock').text(data);
             }
           }
         });
       });

       </script>

       <script>
           $('#add_time').click(function (){
             var  sleep = $('#sleep').val();
             var  gadgets = $('#gadgets').val();
             var  eat = $('#eat').val();
             var  school = $('#school').val();
             var  add = $('#add').val();
             var  relax = $('#relax').val();
             var  hobby = $('#hobby').val();
             var  sport = $('#sport').val();
             var  walk = $('#walk').val();
             var  higiene = $('#higiene').val();
             var  p_time = $('#p_time').val();
             var  circle = $('#circle').val();
             var  v_lessons = $('#v_lessons').val();
             var  cleaning = $('#cleaning').val();
             var  practic = $('#practic').val();

           $.ajax({
             url: 'ajax/add_time.php',
             type: 'POST',
             cache: false,
             data :({'sleep' : sleep,
             'gadgets' : gadgets,
             'eat' : eat,
             'school' : school,
             'add' : add,
             'relax' : relax,
             'hobby' : hobby,
             'sport' : sport,
             'walk' : walk,
             'higiene' : higiene,
             'p_time' : p_time,
             'circle' : circle,
             'v_lessons' : v_lessons,
             'cleaning' : cleaning,
             'practic' : practic }),
             dataType: 'html',
             success: function(data) {
               if(data == 'Готово'){
                 $('#add_time').text('Все готово!');
                 $('#errorBlock2').hide();

               }else{
                 $('#errorBlock2').show();
                 $('#errorBlock2').text(data);
               }
             }
           });
         });

         </script>


</body>

</html>
