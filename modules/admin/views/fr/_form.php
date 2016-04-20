<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fr-form">

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
        'Штрих-М: Кассир 5 (USB)' => 'Штрих-М: Кассир 5 (USB)',
        'Штрих-М: Розничная торговля 5' => 'Штрих-М: Розничная торговля 5',
        'Frontol 5 Торговля ЕГАИС ' => 'Frontol 5 Торговля ЕГАИС ',
        'Frontol xPOS ЕГАИС' => 'Frontol xPOS ЕГАИС',
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

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autootrez_check')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'garant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interf_conn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metod_print')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed_print')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed_print_qr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lenght_check_lent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gabarit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'primetka')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
