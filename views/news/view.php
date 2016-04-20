<?php

/* @var $this yii\web\View */

$this->title = $news->title;

$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $news->title;
?>
<img src="/uploads/<?= $news->imgeFile;?>" class="img_news_views">
<h1><?= $news->title;?></h1>
<data id="news-date"><?= $news->date;?></data>
<p><?= $news->content;?></p>