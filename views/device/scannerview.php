<?php

/* @var $this yii\web\View */
use yii\widgets\DetailView;
$this->title = $scanner->name;
$this->registerMetaTag([
    'name' => 'description',
    'content' => ''
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => ''
]);

?>
    <img src="/uploads/<?= $scanner->imgeFile ?>" height="250" style="float: left">
    <h1><?= $scanner->name; ?></h1>

    <p>
        <?= $scanner->price;?><br><br><br>
    </p>
    <p>
        <?= $scanner->primetka;?><br><br><br>
    </p>
<?= DetailView::widget([
    'model' => $scanner,
    'attributes' => [
   //     'ig',
   //     'type_org',
   //     'hardware',
   //     'software',
   //     'name',
   //     'imgeFile',
   //     'price',
   //     'egais',
        'proizv',
        'type_scan',
        'type_scan_mod',
        'schit_kod',
        'rastr_scan',
        'interf_conn',
        'class_secur',
        'color',
        'gorant',
   //     'primetka:ntext',
    ],
]) ?>