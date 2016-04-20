<?php

namespace app\controllers;

class All_to_egaisController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Все для ЕГАИС'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
