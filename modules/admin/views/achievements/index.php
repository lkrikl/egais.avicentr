<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AchievementsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Достижения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievements-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить достижение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

      //      'id',
            'title',
      //      'imgeFile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
