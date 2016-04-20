<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fr */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Frs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'type_org',
            'hardware',
            'software',
            'name',
            'imgeFile',
            'price',
            'egais',
            'proizv',
            'color',
            'autootrez_check',
            'garant',
            'interf_conn',
            'metod_print',
            'speed_print',
            'speed_print_qr',
            'lenght_check_lent',
            'gabarit',
            'primetka:ntext',
        ],
    ]) ?>

</div>
