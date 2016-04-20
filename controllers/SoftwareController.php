<?php

namespace app\controllers;

class SoftwareController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Софт'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
