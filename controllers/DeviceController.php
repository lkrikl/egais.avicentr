<?php

namespace app\controllers;

class DeviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Оборудование'])
            ->one();
        return $this->render('index',[
                'page' => $page,
            ]
        );
    }
    public function actionScanner()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'Сканер'])
            ->one();
        $scanner = \app\models\Scanner::find()
            ->all();
        return $this->render('scanner',[
                'page' => $page,
                'scanner' => $scanner,
            ]
        );
    }
    public function actionScannerview($id)
    {
        $scanner = \app\models\Scanner::find()
            ->where(['ig' => $id])
            ->one();
        return $this->render('scannerview',[
            'scanner' => $scanner,
        ]);
    }
    public function actionFr()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'ФР'])
            ->one();
        $fr = \app\models\Fr::find()
            ->all();
        return $this->render('fr',[
                'page' => $page,
                'fr' => $fr,
            ]
        );
    }
    public function actionFrview($id)
    {
        $fr = \app\models\Fr::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('frview',[
            'fr' => $fr,
        ]);
    }
    public function actionTcd()
    {
        $page = \app\models\Page::find()
            ->where(['page' => 'ТСД'])
            ->one();
        $tcd = \app\models\Tcd::find()
            ->all();
        return $this->render('tcd',[
                'page' => $page,
                'tcd' => $tcd,
            ]
        );
    }
    public function actionTcdview($id)
    {
        $tcd = \app\models\Tcd::find()
            ->where(['id' => $id])
            ->one();
        return $this->render('tcdview',[
            'tcd' => $tcd,
        ]);
    }

}
