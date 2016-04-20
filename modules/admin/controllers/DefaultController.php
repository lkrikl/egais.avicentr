<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\User;
use Yii;

class DefaultController extends Controller
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
	
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	public function actionLogin(){
		die('this is login');
	}
	
	public function actionLogout(){
		Yii::$app->user->logout();
		header('Location: /');
	}
}
