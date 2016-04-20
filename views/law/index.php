<?php

/* @var $this yii\web\View */

$this->title = 'Центр права';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $customer->metadescription
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $customer->matakeywords
]);

?>
    <h1><?= $page->title; ?></h1>

    <p>
        <?= $page->text;?><br><br><br>
    </p>





<?php foreach ($services as $one):?>
    <div class="col-lg-3">
        <a href="law/view/<?php echo $one->id;?>"><img src="/uploads/<?php echo $one->imgeFile;?>" class="img_news"></a>
    </div>
    <div class="col-lg-3">
        <a href="law/view/<?php echo $one->id;?>"><?php echo $one->title;?></a>
    </div>
    <div class="col-lg-3">
        <?php echo $one->anons;?>
    </div>
    <div class="col-lg-3">
        <a href="#send" class="button button-green">Отправить заявку</a>
    </div>

<?php endforeach; ?><hr style="margin-bottom: 50px;">