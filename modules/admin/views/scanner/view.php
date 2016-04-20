<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Scanner */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Scanners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scanner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ig], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ig], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ig',
            'type_org',
            'hardware',
            'software',
            'name',
            'imgeFile',
            'price',
            'egais',
            'proizv',
            'type_scan',
            'type_scan_mod',
            'schit_kod',
            'rastr_scan',
            'interf_conn',
            'class_secur',
            'color',
            'gorant',
            'primetka:ntext',
        ],
    ]) ?>

</div>
