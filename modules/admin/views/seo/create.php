<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Seo */

$this->title = 'Добавить СЕО';
$this->params['breadcrumbs'][] = ['label' => 'СЕО', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
