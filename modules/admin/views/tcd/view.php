<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tcd */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tcds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcd-view">

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
            'harware',
            'software',
            'name',
            'imgeFile',
            'price',
            'egais',
            'proizv',
            'processor',
            'ddr',
            'display',
            'type_display',
            'type_schit',
            'speed_scan',
            'daln_schit',
            'klav',
            'os',
            'rus',
            'interf',
            'gsm',
            'pil',
            'temp',
            'gobar',
            'ves',
            'primetka:ntext',
        ],
    ]) ?>

</div>
