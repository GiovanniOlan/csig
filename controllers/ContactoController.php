<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Contacto;
use yii\filters\VerbFilter;
use app\models\ContactoSearch;
use yii\web\NotFoundHttpException;

class ContactoController extends Controller
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
        // $searchModel = new ContactoSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);


        // echo '<pre>';
        // var_dump(Yii::$app->mailer->compose()
        //     ->setFrom('contactanos@csig.com.mx')
        //     ->setTo('yovi8456@gmail.com')
        //     ->setSubject('Prueba')
        //     ->setTextBody('Plain text content')
        //     ->setHtmlBody('<b>HTML content</b>')
        //     ->send());
        // echo '</pre>';
        // die;

        $model = new Contacto();


        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            $model->con_fecha =  date('Y-m-d H:i:s');
            if ($model->save()) {
                if (Yii::$app->user->isSuperAdmin) {
                    return $this->redirect(['view', 'con_id' => $model->con_id]);
                } else if (Yii::$app->user->isGuest) {
                    Yii::$app->session->setFlash('success', "Tu mensaje se ha enviado con éxito, te contactaremos lo mas rápido posible.");
                    return $this->redirect(['/contacto', ['model' => new Contacto]]);
                }
            }

            return $this->refresh();
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('contact', compact('model'));
    }

    public function actionView($con_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($con_id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Contacto();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'con_id' => $model->con_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($con_id)
    {
        $model = $this->findModel($con_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'con_id' => $model->con_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($con_id)
    {
        $this->findModel($con_id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($con_id)
    {
        if (($model = Contacto::findOne(['con_id' => $con_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
