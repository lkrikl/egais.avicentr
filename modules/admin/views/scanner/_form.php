<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Scanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scanner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'type_org')->dropDownList([
        'ИП продающее пиво в розницу и на разлив' => 'ИП продающее пиво в розницу и на разлив',
        'Один розничный магазин, который продает крепкий алкоголь' => 'Один розничный магазин, который продает крепкий алкоголь',
        'Сеть розничных магазинов продающих крепкий алкоголь' => 'Сеть розничных магазинов продающих крепкий алкоголь',
        'Предприятия общественного питания (HoReCa)' => 'Предприятия общественного питания (HoReCa)'
    ]); ?>

    <?= $form->field($model, 'hardware')->dropDownList([
        'Планшет на Android' => 'Планшет на Android',
        'Планшет на Windows 10' => 'Планшет на Windows 10',
        'ПК на Windows 7+' => 'ПК на Windows 7+',
    ]); ?>

    <?= $form->field($model, 'software')->dropDownList([
        'АТОЛ TabletPOS' => 'АТОЛ TabletPOS',
        'Штрих-М: Кассир 5 (USB)' => 'Штрих-М: Кассир 5 (USB)',
        'ПК на Windows 7+' => 'ПК на Windows 7+',
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'egais')->dropDownList([
        'Да' => 'Да',
        'Нет' => 'Нет',
    ]); ?>

    <?= $form->field($model, 'proizv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_scan_mod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schit_kod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rastr_scan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interf_conn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_secur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gorant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primetka')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
