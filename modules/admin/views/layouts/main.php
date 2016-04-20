<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'ЕГАИС',
        'brandUrl' => ['/admin'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
          //  ['label' => 'Комплексное обслуживание бизнеса', 'url' => ['/kob/index']],
     //       ['label' => 'Страницы', 'url' => ['/admin/page/index']],
    //        ['label' => 'Новости', 'url' => ['/admin/news/index']],
      //      ['label' => 'СЕО', 'url' => ['/admin/seo/index']],
    //        ['label' => 'Сотрудники', 'url' => ['/admin/worker/index']],
    //        ['label' => 'Контакты', 'url' => ['/admin/contact/index']],
    //        ['label' => 'Достижения', 'url' => ['/admin/achievements/index']],
    //        ['label' => 'Услуги', 'url' => ['/admin/services/index']],
            ['label' => 'Заявки', 'url' => ['/admin/score/index']],

          //  ['label' => 'Деловой туризм', 'url' => ['/businesstravel/index']],
          //  ['label' => 'Контакты', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => '', 'url' => ['/site/login']] :
                [
                    'label' => 'Выход (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">



    <div class="container">



        <p class="pull-left">&copy; ЕГАИС Ави Центр <?= date('Y') ?></p>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
