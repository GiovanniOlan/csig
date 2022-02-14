<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\bootstrap4\Alert;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\ProductoImagen;
use yii\web\NotFoundHttpException;
use app\models\ProductoImagenSearch;

class ProductoImagenController extends Controller
{
    /**
     * @inheritDoc
     */
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
        $searchModel = new ProductoImagenSearch();
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
        $model = new ProductoImagen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $imagenes = UploadedFile::getInstances($model, 'img'); //instanciamos la imagen
                if (!is_null($imagenes)) {
                    foreach ($imagenes as $key => $image) {
                        $tModel =  clone $model;
                        $ext = explode(".", $image->name); //We get which is the extension's file
                        $ext = end($ext); //We get which is the extension's file
                        $tModel->proimg_url = Yii::$app->security->generateRandomString() . ".{$ext}"; // We safe name's image with ramdom string
                        $path = Yii::$app->basePath . "/web/images/productos/" . $tModel->proimg_url; // We safe path's image for be save 
                        $image->saveAs($path); //Save the image in the path
                        $tModel->img = $tModel->proimg_url;
                        $tModel->save(); //Save the temp model
                    }
                    if (Yii::$app->user->isSuperAdmin) {
                        return $this->redirect(['index']);
                    }
                } else {
                    Yii::$app->session->setFlash('error', "No reconoce ninguna imagen");
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

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'img');
                if (!is_null($image)) {
                    $path = Yii::$app->basePath . "/web/images/productos/" . $model->proimg_url;
                    $image->saveAs($path);
                }
                $model->img = $model->proimg_url;
                if ($model->save()) {
                    if (Yii::$app->user->isSuperAdmin) {
                        return $this->redirect(['view', 'id' => $model->proimg_id]);
                    }
                }
            }
        }

        return $this->render('update', compact('model'));
    }

    public function actionDelete($id)
    {
        $model =  $this->findModel($id);
        unlink(Yii::$app->basePath . "/web/images/productos/" . $model->proimg_url);
        $model->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($proimg_id)
    {
        if (($model = ProductoImagen::findOne(['proimg_id' => $proimg_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
