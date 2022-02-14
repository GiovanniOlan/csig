<?php

namespace app\controllers;

use Yii;
use app\models\Banner;
use yii\web\Controller;
use yii\bootstrap4\Alert;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\BannerSearch;
use yii\web\NotFoundHttpException;

class BannerController extends Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'ghost-access' => [
                    'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Banner();


        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'img'); //instanciamos la imagen
                if (!is_null($image)) {
                    $ext = explode(".", $image->name); //We get which is the extension's file
                    $ext = end($ext); //We get which is the extension's file
                    $model->bann_photo = Yii::$app->security->generateRandomString() . ".{$ext}"; // We safe name's image with ramdom string
                    $path = Yii::$app->basePath . "/web/images/banners/" . $model->bann_photo; // We safe path's image for be save 
                    $image->saveAs($path); //Save the image in the path
                    $model->img = $model->bann_photo;
                    if ($model->save()) {
                        if (Yii::$app->user->isSuperAdmin) {
                            return $this->redirect(['view', 'id' => $model->bann_id]);
                        }
                    }
                } else {
                    Yii::$app->session->setFlash('error', "No has escogido ninguna imagen");
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'img');
                if (!is_null($image)) {
                    $path = Yii::$app->basePath . "/web/images/banners/" . $model->bann_photo;
                    $image->saveAs($path);
                }
                $model->img = $model->bann_photo;
                if ($model->save()) {
                    if (Yii::$app->user->isSuperAdmin) {
                        return $this->redirect(['view', 'id' => $model->bann_id]);
                    }
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        unlink(Yii::$app->basePath . "/web/images/banners/" . $model->bann_photo);
        $model->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($bann_id)
    {
        if (($model = Banner::findOne(['bann_id' => $bann_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
