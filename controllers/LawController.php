<?php

namespace app\controllers;

class LawController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'ЦЕНТР ПРАВА'])
            ->one();
        $services = \app\models\Services::find()
            ->where(['category' => 'ЦЕНТР ПРАВА'])
            ->all();
        return $this->render('index',[
        'services' => $services,
        'page' => $page,

        ]);
    }
    public function actionView($id)
    {
        $services = \app\models\Services::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('view',[
            'services' => $services,
        ]);
    }

}
