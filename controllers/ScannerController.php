<?php

namespace app\controllers;

class ScannerController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Сканер'])
            ->one();
        $scanner = \app\models\Scanner::find()
            ->all();
        return $this->render('index',[
                'page' => $page,
                'scanner' => $scanner,
            ]
        );
    }
    public function actionView($ig)
    {
        $scanner = \app\models\Scanner::find()
            ->where(['ig' => $ig])
            ->one();
        var_dump($scanner);
        return $this->render('scannerview',[
            'scanner' => $scanner,
        ]);
    }

}
