<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use app\models\ProductoImagen;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductoImagenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imagenes De Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-imagen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Imagenes De Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'proimg_id',
            'proimg_fkproducto',
            //'proimg_url:url',

            [
                'attribute' => 'imagen',
                'format' => 'raw',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProductoImagen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->proimg_id]);
                }
            ],
        ],
    ]); ?>


</div>