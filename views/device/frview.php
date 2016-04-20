<?php
use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = $fr->name;
$this->registerMetaTag([
    'name' => 'description',
    'content' => ''
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => ''
]);

?>
<img src="/uploads/<?= $fr->imgeFile ?>" height="250" style="float: left">
<h1><?= $fr->name; ?></h1>

<p>
    <?= $fr->price;?><br><br><br>
</p>
    <p>
        <?= $fr->primetka;?><br><br><br>
    </p>

<?= DetailView::widget([
    'model' => $fr,
    'attributes' => [
  //      'id',
 //       'type_org',
  //      'hardware',
  //      'software',
   //     'name',
 //       'imgeFile',
 //       'price',
     //   'egais',
        'proizv',
        'color',
        'autootrez_check',
        'garant',
        'interf_conn',
        'metod_print',
        'speed_print',
        'speed_print_qr',
        'lenght_check_lent',
        'gabarit',
    //    'primetka:ntext',
    ],
]) ?>