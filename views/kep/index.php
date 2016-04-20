<?php

/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => ''
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => ''
]);

?>
<h1><?= $page->title; ?></h1>

<p>
    <?= $page->text;?><br><br><br>
</p>


