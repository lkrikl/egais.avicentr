<?php

namespace app\controllers;

class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $achievements = \app\models\Achievements::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('index',[
            'achievements' => $achievements,
        ]);
    }

}
