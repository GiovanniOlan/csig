<?php

namespace app\controllers;

use Yii;
use app\widgets\Alert;
use Imagine\Image\Box;
use yii\imagine\Image;
use yii\web\Controller;
use app\models\Producto;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\ProductoImagen;
use app\models\ProductoSearch;
use yii\web\NotFoundHttpException;
use webvimark\modules\UserManagement\models\User;


class ProductoController extends Controller
{

    public $freeAccessActions = ['ver-producto'];

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
        $searchModel = new ProductoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', compact('searchModel', 'dataProvider'));
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Producto();
        $productoImagen = new ProductoImagen();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->pro_date =  date('Y-m-d H:i:s');
                if ($model->save()) {
                    $imagenes = UploadedFile::getInstances($productoImagen, 'img'); //instanciamos la imagen
                    if (!is_null($imagenes)) {
                        foreach ($imagenes as $key => $image) {
                            $tModel =  clone $productoImagen;
                            $tModel->proimg_fkproducto = $model->pro_id;
                            $ext = explode(".", $image->name); //We get which is the extension's file
                            $ext = end($ext); //We get which is the extension's file
                            $tModel->proimg_url = Yii::$app->security->generateRandomString() . ".{$ext}"; // We safe name's image with ramdom string
                            $path = Yii::$app->basePath . "/web/images/productos/" . $tModel->proimg_url; // We safe path's image for be save 
                            $image->saveAs($path); //Save the image in the path
                            $tModel->img = $tModel->proimg_url;
                            $tModel->save();
                            $imagine = Image::getImagine();
                            $image = $imagine->open($path);
                            $image->resize(new Box(600, 350))->save($path, ['quality' => 70]);
                            // Image::resize($path, 600, 350)
                            //     ->save(Yii::getAlias($path), ['quality' => 80]);
                        }
                        return $this->redirect(['index']);
                    } else {
                        echo Alert::widget([
                            'options' => [
                                'class' => 'alert-info',
                            ],
                            'body' => 'No renoce ninguna imagen',
                        ]);
                    }
                    return $this->redirect(['view', 'id' => $model->pro_id]);
                } else {
                    $model->loadDefaultValues();
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', compact('model', 'productoImagen'));
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $productoImagen = ProductoImagen::getAllImagesProductos($model->pro_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index']);
            // $imagenes = UploadedFile::getInstances(empty($productoImagen) ? new ProductoImagen : $productoImagen[0], 'img'); //instanciamos la imagen
            // $newProductImage = new ProductoImagen();
            // if (!is_null($imagenes)) {
            //     ProductoImagen::deleteImagesAutomaticOfAProduct($model->pro_id);
            //     foreach ($imagenes as $key => $image) {
            //         $tModel =  clone $newProductImage;
            //         $tModel->proimg_fkproducto = $model->pro_id;
            //         $ext = explode(".", $image->name); //We get which is the extension's file
            //         $ext = end($ext); //We get which is the extension's file
            //         $tModel->proimg_url = Yii::$app->security->generateRandomString() . ".{$ext}"; // We safe name's image with ramdom string
            //         $path = Yii::$app->basePath . "/web/images/productos/" . $tModel->proimg_url; // We safe path's image for be save 
            //         $image->saveAs($path); //Save the image in the path
            //         $tModel->img = $tModel->proimg_url;
            //         $tModel->save();
            //     }
            //     return $this->redirect(['index']);
            // } else {
            //     Yii::$app->session->setFlash('error', "No reconoce ninguna imagen");
            // }
        }

        return $this->render('update', compact('model', 'productoImagen'));
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        ProductoImagen::deleteImagesAutomaticOfAProduct($model->pro_id);
        $model->delete();

        return $this->redirect(['index']);
    }

    public function actionVerProducto($id)
    {
        $model = $this->findModel($id);
        $images = ProductoImagen::getUrlImageOfOneProducto($id);

        return $this->render('ver-producto', compact('model', 'images'));
    }

    protected function findModel($pro_id)
    {
        if (($model = Producto::findOne(['pro_id' => $pro_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
