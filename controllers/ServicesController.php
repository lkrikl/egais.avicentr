<?php

namespace app\controllers;

class ServicesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Услуги'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
