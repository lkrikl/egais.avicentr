<?php

namespace app\controllers;

class Public_cateringController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Общепит'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
