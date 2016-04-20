<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeviceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="device-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type_organization') ?>

    <?= $form->field($model, 'ca') ?>

    <?= $form->field($model, 'hardware') ?>

    <?= $form->field($model, 'software') ?>

    <?php // echo $form->field($model, 'scanner') ?>

    <?php // echo $form->field($model, 'fr_print') ?>

    <?php // echo $form->field($model, 'tcd') ?>

    <?php // echo $form->field($model, 'imgeFile') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'tth') ?>

    <?php // echo $form->field($model, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
