<?php

namespace app\controllers;

class ContactController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $worker = \app\models\Worker::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
        $contact = \app\models\Contact::find()
            ->where(['id' => 1])
            ->one();
        return $this->render('index',[
            'worker' => $worker,
            'contact' => $contact,
        ]);
    }


}
