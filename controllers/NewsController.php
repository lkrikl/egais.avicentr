<?php

namespace app\controllers;

class NewsController extends \yii\web\Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        $news = \app\models\News::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('index',[
            'news' => $news,
        ]);
    }
    public function actionView($id)
    {
        $news = \app\models\News::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('view',[
            'news' => $news,
        ]);
    }

}
