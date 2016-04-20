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
<?php foreach ($scanner as $one): ?>
<div class="col-lg-3">
    <a href="/device/scannerview/<?php echo $one->ig;?>"><div id="device_block">
        <img src="/uploads/<?php echo $one->imgeFile ?>" width="100%" height="250">
        <h4><?php echo $one->name; ?></h4>
        <p><?php echo $one->price; ?></p>
            <p><?php echo $one->ig; ?></p>

    </div></a>
</div>
<?php endforeach; ?>