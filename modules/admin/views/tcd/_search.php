<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TcdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type_org') ?>

    <?= $form->field($model, 'harware') ?>

    <?= $form->field($model, 'software') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'imgeFile') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'egais') ?>

    <?php // echo $form->field($model, 'proizv') ?>

    <?php // echo $form->field($model, 'processor') ?>

    <?php // echo $form->field($model, 'ddr') ?>

    <?php // echo $form->field($model, 'display') ?>

    <?php // echo $form->field($model, 'type_display') ?>

    <?php // echo $form->field($model, 'type_schit') ?>

    <?php // echo $form->field($model, 'speed_scan') ?>

    <?php // echo $form->field($model, 'daln_schit') ?>

    <?php // echo $form->field($model, 'klav') ?>

    <?php // echo $form->field($model, 'os') ?>

    <?php // echo $form->field($model, 'rus') ?>

    <?php // echo $form->field($model, 'interf') ?>

    <?php // echo $form->field($model, 'gsm') ?>

    <?php // echo $form->field($model, 'pil') ?>

    <?php // echo $form->field($model, 'temp') ?>

    <?php // echo $form->field($model, 'gobar') ?>

    <?php // echo $form->field($model, 'ves') ?>

    <?php // echo $form->field($model, 'primetka') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
