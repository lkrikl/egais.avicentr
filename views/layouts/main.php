<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Carousel;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="<?= Yii::getAlias('@web/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src="<?= Yii::getAlias('@web/js/jquery.maskedinput.js'); ?>"></script>
    <script src="<?= Yii::getAlias('@web/js/script.js'); ?>"></script>
    <!-- Loading Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Elements Styles -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Loading Magnific-Popup Styles -->
    <link href="/css/magnific-popup.css" rel="stylesheet">

    <!-- Loading Font Styles -->
    <link href="/css/iconfont-style.css" rel="stylesheet">

    <!-- WOW Animate-->
    <link href="/scripts/animations/animate.css" rel="stylesheet">

    <!-- Datepicker Styles -->
    <link href="/css/bootstrap-datepicker3.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="/images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="/images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-touch-icon-114x114.png">



    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div id="wrap">

    <!-- NAVIGATION INFO -->
    <!-- INTRO LINE BLOCK -->
    <!-- NAVIGATION LOGIN FULL -->
    <!-- CONTENT 3 COL BLOCK-->
    <!-- CONTENT HALF LEFT BLOCK -->
    <!-- RECENT POSTS 4 COL BLOCK -->
    <!-- INTRO LINE BLOCK -->
    <!-- STEPS LEFT BLOCK -->
    <!-- CLIENTS 2 BLOCK -->
    <!-- BENEFITS LINE BLOCK -->
    <!-- GOTO ARROW BLOCK -->
    <!-- GOTO ARROW BLOCK -->
    <!-- FOOTER -->
    <!-- NAVIGATION INFO -->
    <!-- INTRO CENTER SUBSCRIBE 2 BLOCK -->
    <!-- NAVIGATION LOGIN FULL -->
    <!-- CONTENT HALF LEFT BLOCK -->
    <!-- VIDEO HALF LEFT 2 BLOCK -->
    <!-- BENEFITS GRID BORDER 2 BLOCK-->
    <!-- PORTFOLIO GRID APP BLOCK -->
    <!-- CLIENTS SLIDER BLOCK -->
    <!-- NAVIGATION INFO -->
    <!-- INTRO LINE BLOCK -->
    <!-- NAVIGATION LOGIN FULL -->
    <!-- CONTENT 3 COL BLOCK-->
    <!-- CONTENT HALF LEFT BLOCK -->
    <!-- RECENT POSTS 4 COL BLOCK -->
    <!-- INTRO LINE BLOCK -->
    <!-- STEPS LEFT BLOCK -->
    <!-- CLIENTS 2 BLOCK -->
    <!-- BENEFITS LINE BLOCK -->
    <!-- GOTO ARROW BLOCK -->
    <!-- GOTO ARROW BLOCK -->
    <!-- FOOTER -->
    <!-- NAVIGATION INFO -->
    <!-- INTRO CENTER SUBSCRIBE 2 BLOCK -->
    <!-- NAVIGATION LOGIN FULL -->
    <!-- CONTENT HALF LEFT BLOCK -->
    <!-- VIDEO HALF LEFT 2 BLOCK -->
    <!-- BENEFITS GRID BORDER 2 BLOCK-->
    <!-- PORTFOLIO GRID APP BLOCK -->
    <!-- CLIENTS SLIDER BLOCK -->
    <!-- NAVIGATION INFO -->
    <nav class="navbar bg-color3" data-color="rgb(85, 85, 85)">
        <div class="container" style="height: 35px">
            <div style="margin-top: 10px;">
            <div class="col-lg-1-5"> <a class="navbar-brand goto" href="/" data-color="rgb(0, 192, 255)"><img src="/images/logo_abicentr.png"></a></div>
            <div class="col-lg-1-5" style="text-align: right; margin-top: 20px;"><a style="color: black;" href="/egais">Что такое ЕГАИС?</a></div>
            <div class="col-lg-1-5" style="text-align: right; margin-top: 20px;"><a style="color: black;" href="/that_make_you" >Что делать вам?</a></div>
            <div class="col-lg-1-5" style="text-align: right; margin-top: 20px;"><a style="color: black;" href="/all_to_egais">Все для ЕГАИС</a></div>
            <div class="col-lg-1-5" style="text-align: right; margin-top: 10px;"><a class="btn btn-sm btn-primary goto" href="#send" data-color="rgb(255, 255, 255)">Отправить заявку</a></div>
            </div>
        </div>
    </nav><!-- INTRO LINE BLOCK -->
    <header class="intro-block bg-color2 dark-bg fixed-bg half-padding" id="intro-line" style="background-image: url(&quot;/images/egais3.jpg&quot;); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-color: rgb(0, 192, 255);" data-color="rgb(255, 255, 255)" src="images/bg39.jpg">
            <div class="row">
                <div">
                    <h1 class="title" data-color="rgb(255, 255, 255)" style="text-align: center"><strong>Подключение к ЕГАИС</strong></h1>
                    <p class="editContent" data-color="rgb(255, 255, 255)" style="text-align: center; font-size: 24px; margin-bottom: 40px;">для розничных продавцов алкоголя в Симферополе и по всему Крыму</p>
                    <p class="editContent" data-color="rgb(255, 255, 255)" style="text-align: center"><li style="text-align: center">с 1 января 2016 года обязаны подтверждать в ЕГАИС факт закупки алкоголя</li></p>
                    <p class="editContent" data-color="rgb(255, 255, 255)" style="text-align: center"><li style="text-align: center">с 1 июля 2016 года – факт продажи</li></p><br>
                <div id="btn_header">
                <a class="btn btn-sm btn-primary goto" style="margin-right: 50px;" href="/solution" data-color="rgb(255, 255, 255)">Подобрать решение <br>самостоятельно</a>
                <a class="btn btn-sm btn-primary goto" href="#send" data-color="rgb(255, 255, 255)">Отправить заявку на<br>расчет</a>
                </div><br><br><br>
                </div>
            </div>
    </header><!-- NAVIGATION LOGIN FULL -->
<div class="container">
    <div id="contact-info">
        <img src="/images/phone_icon.png" style="margin-right: 20px;" class="img-vozm"> +7 (978) 077 8 777 <data  style="margin-left: 20px;" id="line-relative-contact"> |
            <a href="#contact" style="color: black"><img src="/images/quest_icon.png" style="margin-left: 20px;" class="img-vozm"> <data style="margin-left: 20px">Вопрос специалисту</data> </a>
    </div><hr>




    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<section class="bg-color3 half-padding pattern-bg" id="benefits-line" style="background-image: url(&quot;/images/pattern-bg3.jpg&quot;);" data-color="rgb(85, 85, 85)" src="images/pattern-bg3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <ul class="item-list-left">
                    <li data-color="rgb(85, 85, 85)">
                        <i class="icon icon-call-in" data-color="rgb(0, 192, 255)"></i>
                        <p data-color="rgb(85, 85, 85)">Позвоните нам</p>
                        <h3 class="sep-zero-bottom" data-color="rgb(34, 34, 34)">+7 (3652) 788-108<br>
                            +7 (978) 077 8 777<br></h3>
                    </li>

                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="item-list-left">
                    <li data-color="rgb(85, 85, 85)">
                        <i class="icon icon-clock" data-color="rgb(0, 192, 255)"></i>
                        <p data-color="rgb(85, 85, 85)">Часы Работы</p>
                        <h3 class="sep-zero-bottom" data-color="rgb(34, 34, 34)">09:00 - 18:00<br>пн - пт</h3>
                    </li>

                </ul>
            </div>
            <div class="col-sm-4">
                <ul class="item-list-left">
                    <li data-color="rgb(85, 85, 85)">
                        <i class="icon icon-envelope-open" data-color="rgb(0, 192, 255)"></i>
                        <p data-color="rgb(85, 85, 85)">Напишите нам</p>
                        <h3 class="sep-zero-bottom" data-color="rgb(34, 34, 34)">egais@avicentr.ru</h3>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section><!-- GOTO ARROW BLOCK -->

<div class="container" style="margin-top: 50px;">
    <div class="col-lg-3">
        <a href="/egais"><h4>Что такое ЕГАИС?</h4></a>
    </div>
    <div class="col-lg-3">
        <a href="that_make_you"><h4>Что делать вам?</h4></a>
        <a href="/ip"><p>ИП, продажа пива на розлив</p></a>
        <a href="/one"><p>Один магазин: продажа крепкого алкоголя</p></a>
        <a href="/lan"><p>Сеть магазинов: продажа крепкого алкоголя</p></a>
        <a href="/public_catering"><p>Кафе, бар или ресторан</p></a>
    </div>
    <div class="col-lg-3">
        <a href="/all_to_egais"><h4>Все для ЕГАИС</h4></a>
        <a href="/jacarta"><p>Аппаратный ключ защиты</p></a>
        <a href="/kep"><p>Квалифицированная электронная подпись</p></a>
        <a href="/software"><p>Программа для кассира</p></a>
        <a href="/device"><p>Торговое оборудование:</p></a>
        <a href="/device/scanner"><p id="device_footer">Сканер 2D</p></a>
        <a href="/device/fr"><p id="device_footer">Фискальный регистратор</p></a>
        <a href="/device/tcd"><p id="device_footer">Терминалы сбора данных</p></a>
        <a href="/services"><p>Услуги по подключению к ЕГАИС</p></a>
    </div>
    <div class="col-lg-3">
        <a href="/solution"><h5 style="text-align: right">Подобрать решение</h5></a>
        <a href="#send"><h5 style="text-align: right">Отправить заявку</h5></a>
    </div>
</div>

<footer class="bg-color3" id="footer" data-color="rgb(85, 85, 85)">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6 text-right">
               <a href="http://avicentr.ru"><p id="offsite_footer">Официальный сайт ООО "АВИ-Центр"</p></a>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <img class="logo" alt="" src="/images/logo_abicentr.png" data-color="rgb(85, 85, 85)">
                <span class="editContent" data-color="rgb(85, 85, 85)" style="position: relative;top: 10px;;">© <?php echo date('Y'); ?> ЕГАИС АВИ-ЦЕНТР<br>Все права защищены</a></span>
            </div>
        </div>
    </div>
</footer></div><!-- /#wrap -->


<!-- MODALS BEGIN-->
<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
            <h3 class="modal-title">&nbsp;</h3>
        </div>
    </div>
</div>
<!-- MODALS END-->

<!-- JavaScript -->
<script src="/scripts/jquery-1.11.2.min.js"></script>
<script src="/scripts/bootstrap.min.js"></script>
<script src="/scripts/jquery.validate.min.js"></script>
<script src="/scripts/smoothscroll.js"></script>
<script src="/scripts/jquery.smooth-scroll.min.js"></script>
<script src="/scripts/placeholders.jquery.min.js"></script>
<script src="/scripts/jquery.magnific-popup.min.js"></script>
<script src="/scripts/jquery.counterup.min.js"></script>
<script src="/scripts/waypoints.min.js"></script>
<script src="/scripts/video.js"></script>
<script src="/scripts/bigvideo.js"></script>
<script src="/scripts/animations/wow.min.js"></script>
<script src="/scripts/jquery.jCounter-0.1.4.js"></script>
<script src="/scripts/bootstrap-datepicker.min.js"></script>
<script src="/scripts/custom.js"></script>

<!-- Модальное окно 1 -->
<script type="text/javascript">
    jQuery(function($){
        $("#phone").mask("+7 (999) 999-99-99");
    });
</script>
<a href="#x" class="overlay" id="send"></a>
<div class="popup1">
    <div class="form">
        <script type="text/javascript">
            jQuery(function($){
                $("#phone").mask("+7 (999) 999-99-99");
            });
        </script>
        <h2>ЗАЯВКА</h2><br>
        <form>
            <input name="name" placeholder="* Укажите ваше имя" width="100%" class="textbox" required /><br>
            <input name="phone" placeholder="* Укажите ваш телефон" width="100%" class="textbox" required id="phone" /><br>
            <input name="emailaddress" placeholder="* Укажите ваш Email" class="textbox" type="email" required /><br>
            <textarea rows="4" cols="50" name="subject" placeholder="* Введите ваше сообщение:" class="message" required></textarea><br>
            <input name="submit" class="btn btn-form" type="submit" value="Отправить" />
        </form>
        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</div>

<?php
    $scan = \app\models\Scanner::find()
            ->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
            ->where(['hardware' => 'Планшет на Android'])
            ->where(['software' => 'АТОЛ TabletPOS'])
            ->all();
?>
<?php
$scan_win10 = \app\models\Scanner::find()
    ->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
    ->where(['hardware' => 'Планшет на Windows 10'])
    ->where(['software' => 'Штрих-М: Кассир 5 (USB)'])
    ->all();

$fr_win10_kass5usb = \app\models\Fr::find()
    ->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
    ->where(['hardware' => 'Планшет на Windows 10'])
    ->where(['software' => 'Штрих-М: Кассир 5 (USB)'])
    ->all();
?>




<!-- Модальное окно 1 -->

<a href="#x" class="overlay" id="scan"></a>
<div class="popup">
    <div class="row">
        <h2 style="text-align: center">Сравнение сканеров</h2>

        <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <?php foreach ($scan as $one): ?>
                    <th><?php echo $one->name;?></th>
                    <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><b>Фото</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><img src="/uploads/<?php echo $one->imgeFile;?>" class="img_news"></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                <tr>
                    <td><b>Цена</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->price;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>ЕГАИС</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->egais;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Производитель</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->proizv;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Тип сканера</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->type_scan;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Тип сканирующего модуля</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->type_scan_mod;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Считываемые коды</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->schit_kod;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Растр сканирования</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->rastr_scan;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Интерфейс подключения</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->interf_conn;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Класс защиты</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->class_secur;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Цвет</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->color;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Гарантия</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><?php echo $one->gorant;?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td><b>Выбрать</b></td>
                    <?php foreach ($scan as $one): ?>
                        <td><a href="#closw"><button value="<?php echo $one->name;?>" price="<?php echo $one->price;?>" id="add_to_table<?php echo $one->ig;?>">Выбрать</button></a></td>
                    <?php endforeach; ?>
                </tr>
                </tbody>
            </table>


        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</div>

<!-- Модальное окно 1 -->

<a href="#x" class="overlay" id="scan_win10"></a>
<div class="popup">
    <div class="row">
        <h2 style="text-align: center">Сравнение сканеров</h2>

        <table class="table">
            <thead>
            <tr>
                <th></th>
                <?php foreach ($scan_win10 as $one): ?>
                    <th><?php echo $one->name;?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><b>Фото</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><img src="/uploads/<?php echo $one->imgeFile;?>" class="img_news"></td>
                <?php endforeach; ?>
            </tr>
            <tr>
            <tr>
                <td><b>Цена</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->price;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>ЕГАИС</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->egais;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Производитель</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->proizv;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Тип сканера</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->type_scan;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Тип сканирующего модуля</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->type_scan_mod;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Считываемые коды</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->schit_kod;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Растр сканирования</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->rastr_scan;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Интерфейс подключения</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->interf_conn;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Класс защиты</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->class_secur;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Цвет</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->color;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Гарантия</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><?php echo $one->gorant;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Выбрать</b></td>
                <?php foreach ($scan_win10 as $one): ?>
                    <td><a href="#closw"><button value="<?php echo $one->name;?>" price="<?php echo $one->price;?>" id="add_to_table<?php echo $one->ig;?>">Выбрать</button></a></td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>


        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</div>

<?php
$fr_win10_kass5usb = \app\models\Fr::find()
->where(['type_org' => 'Один розничный магазин, который продает крепкий алкоголь'])
->where(['hardware' => 'Планшет на Windows 10'])
->where(['software' => 'Штрих-М: Кассир 5 (USB)'])
->all();
?>


<a href="#x" class="overlay" id="fr_win10_kass5usb"></a>
<div class="popup">
    <div class="row">
        <h2 style="text-align: center">ФР с печатью</h2>

        <table class="table">
            <thead>
            <tr>
                <th></th>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <th><?php echo $one->name;?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><b>Фото</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><img src="/uploads/<?php echo $one->imgeFile;?>" class="img_news"></td>
                <?php endforeach; ?>
            </tr>
            <tr>
            <tr>
                <td><b>Цена</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->price;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>ЕГАИС</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->egais;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Производитель</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->proizv;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Цвет</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->color;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Автоотрез чека</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->autootrez_check;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Гарантия</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->garant;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Интерфейс подключения</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->interf_conn;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Метод печати</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->metod_print;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Скорость печати</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->speed_print;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Скорость печати QR-кода в сек.</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->speed_print_qr;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Ширина чековой ленты</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->lenght_check_lent;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Габариты</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><?php echo $one->gabarit;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Выбрать</b></td>
                <?php foreach ($fr_win10_kass5usb as $one): ?>
                    <td><a href="#closw"><button value="<?php echo $one->name;?>" price="<?php echo $one->price;?>" id="add_to_table_fr_win10_kass5usb<?php echo $one->id;?>">Выбрать</button></a></td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>


        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</div>

<?php
$tcd = \app\models\Tcd::find()
->all();
?>

<a href="#x" class="overlay" id="tcd"></a>
<div class="popup">
    <div class="row">
        <h2 style="text-align: center">Сравнение ТСД</h2>

        <table class="table">
            <thead>
            <tr>
                <th></th>
                <?php foreach ($tcd as $one): ?>
                    <th><?php echo $one->name;?></th>
                <?php endforeach; ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><b>Фото</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><img src="/uploads/<?php echo $one->imgeFile;?>" class="img_news"></td>
                <?php endforeach; ?>
            </tr>
            <tr>
            <tr>
                <td><b>Цена</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->price;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>ЕГАИС</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->egais;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Производитель</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->proizv;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Процессор</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->processor;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Оперативная память</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->ddr;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Разммер дисплея</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->display;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Разрешение дисплея</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->type_display;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Тип считывающего элемента</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->type_schit;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Скорость сканирования</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->speed_scan;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Дальность считывания кода</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->daln_schit;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Клавиатура</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->klav;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Операционная система</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->os;?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td><b>Интерфейс</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><?php echo $one->interf;?></td>
                <?php endforeach; ?>
            </tr>

            <tr>
                <td><b>Выбрать</b></td>
                <?php foreach ($tcd as $one): ?>
                    <td><a href="#closw"><button value="<?php echo $one->name;?>" price="<?php echo $one->price;?>" id="add_to_table<?php echo $one->id;?>">Выбрать</button></a></td>
                <?php endforeach; ?>
            </tr>
            </tbody>
        </table>


        <a class="close" title="Закрыть" href="#close"></a>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
