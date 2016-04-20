<?php

/* @var $this yii\web\View */

$this->title = 'О нас';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $customer->metadescription
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $customer->matakeywords
]);
?>

<div><h3 class="how_to_work_center">Наши достижения:</h3></div><br><br>

<?php foreach ($achievements as $one):?>
    <a href="#win1<?php echo $one->id;?>" class="button button-green"><img src="/uploads/<?php echo $one->imgeFile;?>" width="200" style="padding-right: 20px;"></a>


    <a href="#x" class="overlay" id="win1<?php echo $one->id;?>"></a>
    <div class="popup">
        <img src="/uploads/<?php echo $one->imgeFile;?>" width="100%"">

            <a class="close" title="Закрыть" href="#close"></a>

    </div>



<?php endforeach; ?>
