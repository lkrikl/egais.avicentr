<?php

namespace app\controllers;

class That_make_youController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Что делать Вам?'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
