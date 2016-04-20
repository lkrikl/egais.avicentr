<?php

namespace app\controllers;

class EgaisController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Егаис'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
