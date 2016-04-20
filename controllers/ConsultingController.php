<?php

namespace app\controllers;

class ConsultingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'КОНСАЛТИНГ'])
            ->one();
        $services = \app\models\Services::find()
            ->where(['category' => 'КОНСАЛТИНГ'])
            ->all();
        return $this->render('index',[
            'page' => $page,
            'services' => $services,
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
