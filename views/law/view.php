<?php

/* @var $this yii\web\View */

$this->title = $services->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => $services->metadescription
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $services->metakeywords
]);
$this->params['breadcrumbs'][] = ['label' => 'Услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $services->title;
?>



<img src="/uploads/<?= $services->imgeFile;?>" class="img_news_views">
<h1><?= $services->title;?></h1>
<p><?= $services->content;?></p>