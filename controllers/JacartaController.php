<?php

namespace app\controllers;

class JacartaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'JaCarta'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }
}
