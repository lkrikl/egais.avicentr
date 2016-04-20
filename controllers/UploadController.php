<?php

namespace app\controllers;

use app\models\Upload;
use Yii;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;

class UploadController extends Controller
{
    public function actionIndex()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($name = $model->uploadCustom()) {

                $up = new Upload();
                $up->name = $name;
                $up->save(false);

                // file is uploaded successfully
                return;
            }
        }

        return $this->render('index', ['model' => $model]);
    }
}
