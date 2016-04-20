<?php

namespace app\controllers;

class LanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Сеть'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
