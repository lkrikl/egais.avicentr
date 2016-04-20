<?php

namespace app\controllers;

class KepController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'КЭП'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }

}
