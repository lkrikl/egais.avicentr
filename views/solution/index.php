<?php

/* @var $this yii\web\View */

$this->title = 'Конфигуратор решений - ЕГАИС ';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'ЕГАИС АВИ Центр'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'ЕГАИС'
]);

?>
<div>
    <script type="text/javascript">
        jQuery(function($){
            $("#phone").mask("+7 (999) 999-99-99");
        });
    </script>
<h1 id="title_config" style="text-align: center">Давайте подберем наиболее подходящее для вас решение  </h1><br>


<div id="type_organization">
    <div class="col-lg-6"><div class="type_of_org" id="ip"><br>Вы индивидуальный предприниматель: продаете пиво, в том числе на розлив</div></div>
    <div class="col-lg-6"><div class="type_of_org" id="one"><br>У вас один магазин:<br> продажа крепкого алкоголя</div></div>
    <div class="col-lg-6"><div class="type_of_org" id="lan"><br>У вас бар, кафе или ресторан:<br> продажа крепкого алкоголя и пива, в том числе на розлив</div></div>
    <div class="col-lg-6"><div class="type_of_org" id="obshepit"><br>У вас сеть магазинов:<br> продажа алкоголя и пива</div></div>
</div>

<div id="hardware_ip">
<h3>Выбирете аппаратную часть:</h3>
<button type="button" class="btn btn-default" id="tablet_android">Планшет на Android</button><br>
<button type="button" class="btn btn-default" id="tablet_win10">Планшет на Windows 10</button><br>
<button type="button" class="btn btn-default" id="pc_win7_ip">ПК на Windows 7+</button><br>
<button type="button" class="btn btn-default" id="shtrih_ip">ШТРИХ-УТМ </button><br>
</div>

<div id="software_android_ip">
<h3>Выбирете ПО для кассового места:</h3>
<button type="button" class="btn btn-default" id="software_android_ip_btn">ЕГАИС - приход для ANDROID</button><br>
</div>

<div id="result_ip_android_ip">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: ИП продающее пиво в розницу и на разлив:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr id="first_strok">
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
            <td><i id="remove_one" class="fa fa-times"></i></td>
        </tr>
        <tr id="first_strok_kep">
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
            <td><i id="remove_one_kep" class="fa fa-times"></i></td>
        </tr>
        <tr id="two_strok">
            <td>Аппаратная Часть</td>
            <td>Планшет на Android</td>
            <td>3999 р.</td>
            <td><i id="remove_two" class="fa fa-times"></i></td>
        </tr>
        <tr id="three_strok">
            <td></td>
            <td>АТОЛ HUB-19</td>
            <td>12000 р.</td>
            <td><i id="remove_three" class="fa fa-times"></i></td>
        </tr>
        <tr id="thoe_strok">
            <td>ПО Для кассового места</td>
            <td>ЕГАИС - приход для ANDROID</td>
            <td>1000 р./год</td>
            <td><i id="remove_thoe" class="fa fa-times"></i></td>
        </tr>
        </tbody>
    </table>
</div>



<div id="result_ip_win10">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: ИП продающее пиво в розницу и на разлив:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr id="first_strok1">
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
            <td><i id="remove_one1" class="fa fa-times"></i></td>
        </tr>
        <tr id="first_strok_kep1">
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
            <td><i id="remove_one_kep1" class="fa fa-times"></i></td>
        </tr>
        <tr id="two_strok1">
            <td>Аппаратная Часть</td>
            <td>Планшет на Windows 10</td>
            <td>5600 р.</td>
            <td><i id="remove_two1" class="fa fa-times"></i></td>
        </tr>
        <tr id="three_strok1">
            <td>ПО Для кассового места</td>
            <td>ЕГАИС - приход для Windows</td>
            <td>1000 р./год</td>
            <td><i id="remove_three1" class="fa fa-times"></i></td>
        </tr>
        <tr id="thoe_strok1">
            <td></td>
            <td>Контур.ЕГАИС</td>
            <td>4000 р./год</td>
            <td><i id="remove_thoe1" class="fa fa-times"></i></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="result_ip_win7">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: ИП продающее пиво в розницу и на разлив:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr id="first_strok2">
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
            <td><i id="remove_one2" class="fa fa-times"></i></td>
        </tr>
        <tr id="first_strok_kep2">
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
            <td><i id="remove_one_kep2" class="fa fa-times"></i></td>
        </tr>
        <tr id="two_strok2">
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td>?</td>
            <td><i id="remove_two2" class="fa fa-times"></i></td>
        </tr>
        <tr id="three_strok2">
            <td>ПО Для кассового места</td>
            <td>ЕГАИС - приход для Windows</td>
            <td>1000 р./год</td>
            <td><i id="remove_three2" class="fa fa-times"></i></td>
        </tr>
        <tr id="thoe_strok2">
            <td></td>
            <td>Контур.ЕГАИС</td>
            <td>4000 р./год</td>
            <td><i id="remove_thoe2" class="fa fa-times"></i></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="result_ip_shtrih">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: ИП продающее пиво в розницу и на разлив:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr id="first_strok3">
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
            <td><i id="remove_one3" class="fa fa-times"></i></td>
        </tr>
        <tr id="first_strok_kep3">
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
            <td><i id="remove_one_kep3" class="fa fa-times"></i></td>
        </tr>
        <tr id="two_strok3">
            <td>Аппаратная Часть</td>
            <td>ШТРИХ-УТМ </td>
            <td>14500 р.</td>
            <td><i id="remove_two3" class="fa fa-times"></i></td>
        </tr>
        <tr id="three_strok3">
            <td>ПО Для кассового места</td>
            <td>Входит в комплект</td>
            <td></td>
            <td><i id="remove_three3" class="fa fa-times"></i></td>
        </tr>
        </tbody>
    </table>
</div>







<div id="hardware_one">
    <h3>Выбирете аппаратную часть:</h3>
    <button type="button" class="btn btn-default" id="one_tablet_android">Планшет на Android</button><br>
    <button type="button" class="btn btn-default" id="one_tablet_win10">Планшет на Windows 10</button><br>
    <button type="button" class="btn btn-default" id="one_pc_win7_ip">ПК на Windows 7+</button><br>
</div>

<div id="software_win7_one">
    <h3>Выбирете ПО для кассового места:</h3>
    <button type="button" class="btn btn-default" id="one_software_win7_shtrih">Штрих-М: Розничная торговля 5 </button><br>
    <button type="button" class="btn btn-default" id="one_software_win7_frontol5">Frontol 5 Торговля ЕГАИС </button><br>
    <button type="button" class="btn btn-default" id="one_software_win7_frontolxpos">Frontol xPOS ЕГАИС </button><br>
    <button type="button" class="btn btn-default" id="one_software_win7_1c8base">1С Розница 8. Базовая версия</button><br>
</div>




<div id="one_software_atol_tablet_scanner_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Один розничный магазин, который продает крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>Планшет на Android +АТОЛ HUB-19</td>
            <td>3999 р. +12000 р.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>АТОЛ TabletPOS </td>
            <td>8000 р./год</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td id="table_scanner_name_android_one">
                <?= $scanner_android->name ?>
                <br><a href="#scan" id="one_software_atol_tablet_scanner_btn">Выбрать другой сканер</a>
            </td>
            <td id="table_scanner_price_android_one"><?= $scanner_android->price ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-11 ПТК</td>
            <td>15000 р.</td>
        </tr>
        </tbody>
    </table>
</div>


<div id="one_software_tablet_win10_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Один розничный магазин, который продает крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr id="first_strok">
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td><b class="price_position">2000</b> р.</td>
            <td><i id="remove_one" class="fa fa-times"></i></td>
        </tr>
        <tr id="first_strok_kep">
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от <b class="price_position">1800</b> р./год</td>
            <td><i id="remove_one_kep" class="fa fa-times"></i></td>
        </tr>
        <tr id="two_strok">
            <td>Аппаратная Часть</td>
            <td>Планшет на Windows 10</td>
            <td>5600 р.</td>
            <td><i id="remove_two" class="fa fa-times"></i></td>
        </tr>
        <tr id="three_strok">
            <td>ПО Для кассового места</td>
            <td>Штрих-М: Кассир 5 (USB) </td>
            <td>7000 р./год</td>
            <td><i id="remove_three" class="fa fa-times"></i></td>
        </tr>
        <tr id="thoe_strok">
            <td>Сканер 2D</td>
            <td id="scanner_price_win10_check">
                <?= $scanner_win10->name; ?><br>
                <a href="#scan_win10" id="one_software_atol_tablet_scanner_btn">Выбрать другой сканер</a>
            </td>
            <td id="scanner_price_win10"><?= $scanner_win10->price; ?></td>
            <td><i id="remove_thoe" class="fa fa-times"></i></td>
        </tr>
        <tr id="five_strok">
            <td>ФР c печатью QR</td>
            <td id="fr_name_win10_kass5usb_check">
                    <?= $fr_win10_kass_usb->name; ?>
                <br><a href="#fr_win10_kass5usb" id="one_software_atol_tablet_scanner_btn">Выбрать другой ФР c печатью QR</a>
            </td>
            <td id="fr_price_win10_kass5usb"><?= $fr_win10_kass_usb->price; ?></td>
            <td><i id="remove_five" class="fa fa-times"></i></td>
        </tr>
        <tr>
            <td><b>Итого:<i id="summ" class="fa fa-bicycle"></i></b></td>
            <td></td>
            <td></td>
            <td class="total_price"></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="one_software_win7_shtrih_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Один розничный магазин, который продает крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Штрих-М: Розничная торговля 5 </td>
            <td>8000 р./год</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>ПТК «ШТРИХ-LIGHT-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-М-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-LIGHT» 200 (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-М» 200 (57 мм, автоотрез) </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="one_software_win7_frontol5_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Один розничный магазин, который продает крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Frontol 5 Торговля ЕГАИС  </td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-77ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-22ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-55ПТК</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-11 ПТК </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="one_software_win7_frontolxpos_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Один розничный магазин, который продает крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Frontol xPOS ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-77ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-22ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-55ПТК</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-11 ПТК </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="one_software_win7_1c8base_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Один розничный магазин, который продает крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>1С Розница 8 </td>
            <td>3300 р.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-77ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-22ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-55ПТК</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-11 ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-LIGHT-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-М-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-LIGHT» 200 (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-М» 200 (57 мм, автоотрез) </td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>ТСД</td>
            <td>Zebra MC2180 2D </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>CipherLab-CP30  </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>MobileBase DS3 ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>MobileBase DS5 ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>CipherLab-9200 ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Point Mobile PM260 ЕГАИС-LITE </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>



<div id="hardware_lan">
    <h3>Выбирете аппаратную часть:</h3>
    <button type="button" class="btn btn-default" id="lan_tablet_win10">Планшет на Windows 10</button><br>
    <button type="button" class="btn btn-default" id="lan_pc_win7">ПК на Windows 7+</button><br>
</div>

<div id="software_win7_lan">
    <h3>Выбирете ПО для кассового места:</h3>
    <button type="button" class="btn btn-default" id="lan_software_win7_shtrih">Штрих-М: Розничная торговля 5 </button><br>
    <button type="button" class="btn btn-default" id="lan_software_win7_frontol5">Frontol 5 Торговля ЕГАИС </button><br>
    <button type="button" class="btn btn-default" id="lan_software_win7_frontolxpos">Frontol xPOS ЕГАИС </button><br>
    <button type="button" class="btn btn-default" id="lan_software_win7_1c8base">1С Розница 8</button><br>
</div>

<div id="lan_software_tablet_win10_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Сеть розничных магазинов продающих крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты + КЭП</td>
            <td>JaCarta + КЭП</td>
            <td>2000 р. + от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>Планшет на Windows 10</td>
            <td>5600 р.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Штрих-М: Кассир 5 (USB)</td>
            <td>7000 р.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Zebra DS4208</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>VMC BurstScan Lite </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>VMC BurstScan II+ </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Datalogic I QD2400 </td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР с печатью QR</td>
            <td>ПТК «ШТРИХ-LIGHT-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-М-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-LIGHT» 200 (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-М» 200 (57 мм, автоотрез) </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="lan_software_win7_shtrih_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Сеть розничных магазинов продающих крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты + КЭП</td>
            <td>JaCarta + КЭП</td>
            <td>2000 р. + от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Штрих-М: Розничная торговля 5 </td>
            <td>8000 р./год</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>ПТК «ШТРИХ-LIGHT-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-М-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-LIGHT» 200 (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-М» 200 (57 мм, автоотрез) </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="lan_software_win7_frontol5_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Сеть розничных магазинов продающих крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты + КЭП</td>
            <td>JaCarta + КЭП</td>
            <td>2000 р. + от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Frontol 5 Торговля ЕГАИС  </td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-77ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-22ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-55ПТК</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-11 ПТК </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="lan_software_win7_frontolxpos_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Сеть розничных магазинов продающих крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты + КЭП</td>
            <td>JaCarta + КЭП</td>
            <td>2000 р. + от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Frontol xPOS ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-77ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-22ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-55ПТК</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-11 ПТК </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="lan_software_win7_1c8base_result">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Сеть розничных магазинов продающих крепкий алкоголь:</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты + КЭП</td>
            <td>JaCarta + КЭП</td>
            <td>2000 р. + от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>1С Розница 8 </td>
            <td>13000 р.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Сканер 2D</td>
            <td>Любой 2D</td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td>ФР c печатью QR</td>
            <td>FPrint-77ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-22ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-55ПТК</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>FPrint-11 ПТК </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-LIGHT-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>ПТК «ШТРИХ-М-ПТК» (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-LIGHT» 200 (57 мм, автоотрез)</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АСПД «ШТРИХ-М» 200 (57 мм, автоотрез) </td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td>ТСД</td>
            <td>Zebra MC2180 2D </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>CipherLab-CP30  </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>MobileBase DS3 ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>MobileBase DS5 ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>CipherLab-9200 ЕГАИС </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Point Mobile PM260 ЕГАИС-LITE </td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

<div id="hardware_obshepit">
    <h3>Выбирете аппаратную часть:</h3>
    <button type="button" class="btn btn-default" id="tablet_android_obshepit">Планшет на Android</button><br>
    <button type="button" class="btn btn-default" id="tablet_win10_obshepit">Планшет на Windows 10</button><br>
    <button type="button" class="btn btn-default" id="pc_win7_ip_obshepit">ПК на Windows 7+</button><br>
    <button type="button" class="btn btn-default" id="shtrih_ip_obshepit">ШТРИХ-УТМ </button><br>
</div>

<div id="software_android_ip">
    <h3>Выбирете ПО для кассового места:</h3>
    <button type="button" class="btn btn-default" id="software_android_ip_btn">ЕГАИС - приход для ANDROID</button><br>
</div>

<div id="result_ip_android_obhepit">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Предприятия общественного питания (HoReCa):</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>Планшет на Android</td>
            <td>3999 р.</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>АТОЛ HUB-19</td>
            <td>+12000 р.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>ЕГАИС - приход для ANDROID</td>
            <td>1000 р./год</td>
        </tr>
        </tbody>
    </table>
</div>

<div id="result_ip_win10_obhepit">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Предприятия общественного питания (HoReCa):</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>Планшет на Windows 10</td>
            <td>5600 р.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>ЕГАИС - приход для Windows</td>
            <td>1000 р./год</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Контур.ЕГАИС</td>
            <td>4000 р./год</td>
        </tr>
        </tbody>
    </table>
</div>
<div id="result_ip_win7_obhepit">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Предприятия общественного питания (HoReCa):</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ПК на Windows 7+</td>
            <td>?</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>ЕГАИС - приход для Windows</td>
            <td>1000 р./год</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Контур.ЕГАИС</td>
            <td>4000 р./год</td>
        </tr>
        </tbody>
    </table>
</div>
<div id="result_ip_shtrih_obhepit">
    <h3><div style="color: white; margin-bottom: 50px; text-align: center; padding: 10px;" class="arrow_box">Общие затраты для: Предприятия общественного питания (HoReCa):</div></h3>
    <table class="table">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Необходимые компоненты</th>
            <th>Наименование компонента</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Аппаратный ключ защиты</td>
            <td>JaCarta</td>
            <td>2000 р.</td>
        </tr>
        <tr>
            <td></td>
            <td>КЭП</td>
            <td>КЭП</td>
            <td>от 1800 р./год</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Аппаратная Часть</td>
            <td>ШТРИХ-УТМ </td>
            <td>14500 р.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>ПО Для кассового места</td>
            <td>Входит в комплект</td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>
    <a  href="/solution"><button type="button" class="btn btn-default" id="refresh" style="float: right; margin-bottom: 20px;"><i class="fa fa-refresh"></i> Перевыбрать</button></a><br><br>

    <div id="form_order_result_ip_android_ip">
        <script type="text/javascript">
            jQuery(function($){
                $("#phone").mask("+7 (999) 999-99-99");
            });
        </script>
        <input name="name" id="name" placeholder="* Укажите ваше имя" width="100%" class="textbox" required /><br>
        <input name="phone" id="phone" placeholder="* Укажите ваш телефон" width="100%" class="textbox" required id="phone" /><br>
        <input name="emailaddress" id="email" placeholder="* Укажите ваш Email" class="textbox" type="email" required /><br>
        <a class="btn btn-default" id="add_form_order_result_ip_android_ip" href="#" data-color="rgb(0, 192, 255)"><i class="icon icon-screen-desktop" data-color="rgb(0, 192, 255)"></i> Отправить заявку</a>
        <a class="btn btn-default" id="add_form_one_software_atol_tablet_scanner_result" href="#" data-color="rgb(0, 192, 255)"><i class="icon icon-screen-desktop" data-color="rgb(0, 192, 255)"></i> Отправить заявку</a>
        <a class="btn btn-default" id="add_rorm_one_software_tablet_win10_result" href="#" data-color="rgb(0, 192, 255)"><i class="icon icon-screen-desktop" data-color="rgb(0, 192, 255)"></i> Отправить заявку</a>
    </div>

   </div>

<h3 id="thanks">Спасибо за заявку, мы свяжемся с Вами в ближайшее время.</h3>

