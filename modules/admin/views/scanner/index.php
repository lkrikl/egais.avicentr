<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scanners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scanner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scanner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ig',
            'type_org',
            'hardware',
            'software',
            'name',
            // 'imgeFile',
             'price',
            // 'egais',
            // 'proizv',
            // 'type_scan',
            // 'type_scan_mod',
            // 'schit_kod',
            // 'rastr_scan',
            // 'interf_conn',
            // 'class_secur',
            // 'color',
            // 'gorant',
            // 'primetka:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
