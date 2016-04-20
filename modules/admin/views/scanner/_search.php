<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScannerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scanner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ig') ?>

    <?= $form->field($model, 'type_org') ?>

    <?= $form->field($model, 'hardware') ?>

    <?= $form->field($model, 'software') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'imgeFile') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'egais') ?>

    <?php // echo $form->field($model, 'proizv') ?>

    <?php // echo $form->field($model, 'type_scan') ?>

    <?php // echo $form->field($model, 'type_scan_mod') ?>

    <?php // echo $form->field($model, 'schit_kod') ?>

    <?php // echo $form->field($model, 'rastr_scan') ?>

    <?php // echo $form->field($model, 'interf_conn') ?>

    <?php // echo $form->field($model, 'class_secur') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'gorant') ?>

    <?php // echo $form->field($model, 'primetka') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
