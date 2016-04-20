<?php
use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = $tcd->name;
$this->registerMetaTag([
    'name' => 'description',
    'content' => ''
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => ''
]);

?>
    <img src="/uploads/<?= $tcd->imgeFile ?>" height="250" style="float: left">
    <h1><?= $tcd->name; ?></h1>

    <p>
        <?= $tcd->price;?><br><br><br>
    </p>
    <p>
        <?= $tcd->primetka;?><br><br><br>
    </p>

<?= DetailView::widget([
    'model' => $tcd,
    'attributes' => [
   //     'id',
    //    'type_org',
   //     'harware',
  //      'software',
        'name',
   //     'imgeFile',
   //     'price',
    //    'egais',
        'proizv',
        'processor',
        'ddr',
        'display',
        'type_display',
        'type_schit',
        'speed_scan',
        'daln_schit',
        'klav',
        'os',
        'rus',
        'interf',
        'gsm',
        'pil',
        'temp',
        'gobar',
        'ves',
    //    'primetka:ntext',
    ],
]) ?>