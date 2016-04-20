<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Tcd;
use app\models\TcdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use common\models\User;


/**
 * TcdController implements the CRUD actions for Tcd model.
 */
class TcdController extends Controller
{
    public $layout = 'main';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions'=>['login','error'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * Lists all Tcd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TcdSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tcd model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    private function getName(){
        $name = '';
        $rand = rand(0, 1000);
        $name = $rand.time();
        return $name;
    }
    /**
     * Creates a new Tcd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tcd();

        if (Yii::$app->request->isPost) {
            $file = UploadedFile::getInstance($model, 'file');
            if ($file != null) {
                $name2 = $file->name;
                $ext = explode('.', $name2);
                $name = $this->getName() . '.' . $ext[1];
                $file->saveAs('uploads/' . $name);
                $model->imgeFile = $name;
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tcd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $file = UploadedFile::getInstance($model, 'file');
            if ($file != null) {
                $name2 = $file->name;
                $ext = explode('.', $name2);
                $name = $this->getName() . '.' . $ext[1];
                $file->saveAs('uploads/' . $name);
                $model->imgeFile = $name;
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tcd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tcd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tcd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tcd::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
