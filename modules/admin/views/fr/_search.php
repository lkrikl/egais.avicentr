<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type_org') ?>

    <?= $form->field($model, 'hardware') ?>

    <?= $form->field($model, 'software') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'imgeFile') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'egais') ?>

    <?php // echo $form->field($model, 'proizv') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'autootrez_check') ?>

    <?php // echo $form->field($model, 'garant') ?>

    <?php // echo $form->field($model, 'interf_conn') ?>

    <?php // echo $form->field($model, 'metod_print') ?>

    <?php // echo $form->field($model, 'speed_print') ?>

    <?php // echo $form->field($model, 'speed_print_qr') ?>

    <?php // echo $form->field($model, 'lenght_check_lent') ?>

    <?php // echo $form->field($model, 'gabarit') ?>

    <?php // echo $form->field($model, 'primetka') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
