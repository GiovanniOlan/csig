<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use Imagine\Image\Box;
use yii\imagine\Image;
use yii\web\Controller;
use yii\bootstrap4\Alert;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\ProductoImagen;
use yii\web\NotFoundHttpException;
use app\models\ProductoImagenSearch;
use webvimark\modules\UserManagement\models\User;

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
        $query = ProductoImagen::find();
        $searchModel = new ProductoImagenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, $query);

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

                        $imagine = Image::getImagine();
                        $image = $imagine->open($path);
                        $image->resize(new Box(600, 350))->save($path, ['quality' => 70]);
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


                    $imagine = Image::getImagine();
                    $image = $imagine->open($path);
                    $image->resize(new Box(600, 350))->save($path, ['quality' => 70]);
                }
                $model->img = $model->proimg_url;
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->proimg_id]);
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

        if (Yii::$app->user->isSuperAdmin) {
            return $this->redirect(['index']);
        } else if (User::hasRole('Duenio')) {
            return $this->redirect(['actualizar-imagen-index', 'id' => $model->proimg_fkproducto]);
        }
    }

    public function actionActualizarImagenIndex($id)
    {
        $model =  ProductoImagen::find()->where(['proimg_fkproducto' => $id]);
        $searchModel = new ProductoImagenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, $model);
        return $this->render('index-one-image', compact('id', 'searchModel', 'dataProvider'));
    }

    public function actionAgregarImagen($id)
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
                        $tModel->proimg_fkproducto = $id;
                        $tModel->save(); //Save the temp model

                        $imagine = Image::getImagine();
                        $image = $imagine->open($path);
                        $image->resize(new Box(600, 350))->save($path, ['quality' => 70]);
                    }
                    return $this->redirect(['actualizar-imagen-index', 'id' => $id]);
                } else {
                    Yii::$app->session->setFlash('error', "No reconoce ninguna imagen");
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('agregar', [
            'model' => $model,
            'id' => $id,
        ]);
    }

    public function actionActualizarUnProducto($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $image = UploadedFile::getInstance($model, 'img');
                if (!is_null($image)) {
                    $path = Yii::$app->basePath . "/web/images/productos/" . $model->proimg_url;
                    $image->saveAs($path);

                    $imagine = Image::getImagine();
                    $image = $imagine->open($path);
                    $image->resize(new Box(600, 350))->save($path, ['quality' => 70]);
                }
                $model->img = $model->proimg_url;
                if ($model->save()) {
                    return $this->redirect(['ver', 'id' => $model->proimg_id]);
                }
            }
        }

        return $this->render('actualizar-un-producto', compact('model'));
    }

    public function actionVer($id)
    {
        return $this->render('ver', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($proimg_id)
    {
        if (($model = ProductoImagen::findOne(['proimg_id' => $proimg_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
