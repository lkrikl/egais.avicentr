<?php

/* @var $this yii\web\View */

$this->title = 'Новости';

?>
<h1>Новости:</h1><hr>
<?php foreach ($news as $one):?>
    <div>
        <img src="/uploads/<?php echo $one->imgeFile;?>" class="img_news">
        <a href="news/view/<?php echo $one->id;?>"><?php echo '<h3>'.$one->title.'</h3>';?></a>
        <?php echo $one->anons.'<br>';?>
        <?php echo '<data id="news-date">'.$one->date.'</data><hr>';?>
    </div><hr>
<?php endforeach; ?>
