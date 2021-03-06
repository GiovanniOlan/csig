<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use app\models\Banner;
use yii\web\Controller;
use app\models\Producto;
use app\models\ContactForm;
use yii\bootstrap4\ActiveForm;
use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\models\forms\LoginForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $this->view->title = 'CSIG';
        $path = 'index';
        if (Yii::$app->user->isSuperAdmin) {
            $path = 'superadmin/index';
        }

        return $this->render($path);
    }

    public function actionLogin()
    {
        $this->view->title = 'CSIG - Iniciar Sesión';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if (Yii::$app->request->isAjax and $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        if ($model->load(Yii::$app->request->post()) and $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', compact('model'));
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionNosotros()
    {
        $this->view->title = 'CSIG - Nosotros';
        return $this->render('about');
    }

    public function actionProductos()
    {
        $this->view->title = 'CSIG - Productos y Servicios';
        $allProducts =  Producto::getAllproductos();
        $banners = Banner::getallBannersVisible();
        return $this->render('products', compact('allProducts', 'banners'));
    }
}
