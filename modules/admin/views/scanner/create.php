<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Scanner */

$this->title = 'Create Scanner';
$this->params['breadcrumbs'][] = ['label' => 'Scanners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scanner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
