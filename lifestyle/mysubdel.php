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
    <?php
     require 'blocks/header.php'?>

    <main class=" mt-5">
        <div class="row justify-content-center">
            <div class="col-4 mb-3">
                <h4>Предмети в школі</h4>
                <div class="mt-3">


                    <form action="" method="post">

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="Мова" id="mova">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Мова</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="Література" id="literatura">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Література</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input " value="Англійська мова / Німецька мова" id="foreign">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Англійська мова / Німецька мова</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="Фізика" id="phisic">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Фізика</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="Хімія" id="chemistry">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Хімія</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="Мистецтво" id="art">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Мистецтво</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input" value="Історія України та всесвітня історія" id="art">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Історія України та всесвітня історія</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Математика</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Трудове навчання</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Інформатика</label>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <label class="form-control" aria-label="Text input with checkbox">Фізична культура</label>
                        </div>



                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Новий предмет...">
                            <p>Ви можете вписати новий предмет, якого тут невистачає, а ми з часом покращимо наш проект.</p>
                            <p><b>Дякую!</b></p>
                        </div>


                        <div class="alert alert-danger mt-2" id="errorBlock"></div>

                        <button type="button" class="btn btn-success mt-3" id="reg_user">Оновити!</button>
                    </form>
                </div>
            </div>

            <!--   -------------------------------------------------Дргуа колонка --------------------------------     !-->

            <div class="col-4 mb-3">
            <h4>Те, чим займаюся протягом дня</h4>



            <form action="" method="post">

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Сон</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Гаджети(ігри, фільми, соц-мережі)</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Їжа</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Навчальний заклад</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Додаткові заняття</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Відпочинок</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Хоббі</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Спорт</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Прогулянки</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Власна гігієна</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Підзаробіток</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Гурток</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Відеоуроки</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Прибирання</label>
                </div>

                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <label class="form-control" aria-label="Text input with checkbox">Практика вивченого</label>
                </div>



                <div class="input-group mb-3 plus-new">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Новий вид...">
                    <p>Ви можете вписати новий вид, якого тут невистачає, а ми з часом покращимо наш проект.</p>
                    <p><b>Дякую!</b></p>
                </div>


                <div class="alert alert-danger mt-2" id="errorBlock"></div>

                <button type="button" class="btn btn-success mt-3" id="reg_user">Оновити!</button>
            </form>
          </div>
        </div>
    </main>


    <?php require 'blocks/footer.php';
     ?>
</body>

</html>
