<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?>:</h1>

    <p>Адрес:1-й Проезд перова поля, 9 стр.2 3 этаж</p>
    <p>Телефон: +7 (495) 989-46-92</p>

    <p>М. Перово, последний вагон из центра, после турникетов направо, в конце перехода налево по лестнице. Далее идти прямо, вдоль дороги, ориентир тц Ваш дом. После тц  направо до бизнес цента Helios City.</p>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.858889695743!2d34.09786091554019!3d44.94653647909837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40eaddd8e3b744cf%3A0xe7dc8ea45339a8c0!2zMTQg0YPQuy4g0KHQtdCy0LDRgdGC0L7Qv9C-0LvRjNGB0LrQsNGPLCDQodC40LzRhNC10YDQvtC_0L7Qu9GM!5e0!3m2!1sru!2s!4v1453912586677" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <h2>Обратная связь</h2>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name') ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-default', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
