<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tcd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcd-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'type_org')->dropDownList([
        'Один розничный магазин, который продает крепкий алкоголь' => 'Один розничный магазин, который продает крепкий алкоголь',
        'Сеть розничных магазинов продающих крепкий алкоголь' => 'Сеть розничных магазинов продающих крепкий алкоголь',
    ]); ?>

    <?= $form->field($model, 'harware')->dropDownList([
        'ПК на Windows 7+' => 'ПК на Windows 7+',
    ]); ?>

    <?= $form->field($model, 'software')->dropDownList([
        '1С Розница 8. Базовая версия' => '1С Розница 8. Базовая версия',
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'egais')->dropDownList([
        'Да' => 'Да',
        'Нет' => 'Нет',
    ]); ?>

    <?= $form->field($model, 'proizv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'processor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ddr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_schit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daln_schit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klav')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'os')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gsm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gobar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ves')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primetka')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
