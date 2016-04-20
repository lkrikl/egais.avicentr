<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seo */

$this->title = 'Редактировать СЕО: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'СЕО', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="seo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
