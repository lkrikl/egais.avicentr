<?php

namespace app\controllers;

class IpController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'ИП'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
