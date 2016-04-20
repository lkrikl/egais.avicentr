<?php

/* @var $this yii\web\View */

$this->title = 'Контакты';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $customer->metadescription
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $customer->matakeywords
]);
$this->params['breadcrumbs'][] = ['label' => 'Контакты', 'url' => ['index']];
?>

<div class="wrap">
    <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1411.9284629182478!2d34.0990357!3d44.9465764!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40eaddd8e3b744cf%3A0xe7dc8ea45339a8c0!2zMTQg0YPQuy4g0KHQtdCy0LDRgdGC0L7Qv9C-0LvRjNGB0LrQsNGPLCDQodC40LzRhNC10YDQvtC_0L7Qu9GM!5e0!3m2!1sru!2sru!4v1439191623130" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-lg-6">
        <?= $contact->address;?>
    </div>
</div>

<div id="clear"></div>

<div><h3 class="how_to_work_center">Наши представители:</h3></div><br><br>



<?php foreach ($worker as $one):?>
    <div class="col-lg-4">
        <p><img src="/uploads/<?php echo $one->imgeFile;?>"></p>
        <h4><?php echo $one->fio;?></h4>
        <p><?php echo $one->phone;?></p>
        <p><?php echo $one->email;?></p>

    </div>
<?php endforeach; ?>
<div id="clear"></div>




<div><h3 class="how_to_work_center"><?= $contact->cooperation;?></h3></div>

<div id="clear"></div>



</div>
<!-- /.container -->