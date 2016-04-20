<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TcdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tcds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tcd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_org',
            'harware',
            'software',
            'name',
            // 'imgeFile',
            // 'price',
            // 'egais',
            // 'proizv',
            // 'processor',
            // 'ddr',
            // 'display',
            // 'type_display',
            // 'type_schit',
            // 'speed_scan',
            // 'daln_schit',
            // 'klav',
            // 'os',
            // 'rus',
            // 'interf',
            // 'gsm',
            // 'pil',
            // 'temp',
            // 'gobar',
            // 'ves',
            // 'primetka:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
