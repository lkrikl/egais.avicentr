<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Achievements */

$this->title = 'Редактировать достижения: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Достижения', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="achievements-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
