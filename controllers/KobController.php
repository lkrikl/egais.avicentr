<?php

namespace app\controllers;

class KobController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
