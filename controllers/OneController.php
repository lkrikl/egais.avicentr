<?php

namespace app\controllers;

class OneController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Один'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
