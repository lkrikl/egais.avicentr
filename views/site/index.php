<?php

/* @var $this yii\web\View */

$this->title = 'ЕГАИС Симферополь, Севастополь, Крым. Подключение к ЕГАИС';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $customer->metadescription
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $customer->matakeywords
]);

?>
</div>




<section id="blog-4col">
    <div class="container">
        <h2 class="title text-center">Новости</h2>
        <div class="row">



            <?php foreach ($news as $one):?>
                <div class="col-sm-3">
                    <div class="post">
                        <div class="post-media">
                            <a href="news/view/<?php echo $one->id;?>"><img class="img-responsive" src="/uploads/<?php echo $one->imgeFile;?>"></a>
                        </div>
                        <div class="post-content">
                            <h4 class="title"><a href="news/view/<?php echo $one->id;?>"><?php echo $one->title;?></a></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>




        </div>
    </div>
</section><!-- INTRO LINE BLOCK -->






