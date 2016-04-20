<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Frs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_org',
            'hardware',
            'software',
            'name',
            // 'imgeFile',
            // 'price',
            // 'egais',
            // 'proizv',
            // 'color',
            // 'autootrez_check',
            // 'garant',
            // 'interf_conn',
            // 'metod_print',
            // 'speed_print',
            // 'speed_print_qr',
            // 'lenght_check_lent',
            // 'gabarit',
            // 'primetka:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
