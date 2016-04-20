<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tcd */

$this->title = 'Create Tcd';
$this->params['breadcrumbs'][] = ['label' => 'Tcds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
