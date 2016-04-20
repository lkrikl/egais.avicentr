<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Scanner */

$this->title = 'Update Scanner: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Scanners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->ig]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scanner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
