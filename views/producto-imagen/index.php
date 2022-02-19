<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Producto;
use yii\grid\ActionColumn;
use app\models\ProductoImagen;
?>
<div class="producto-imagen-index container">
    <div class="rounded-3 py-2 px-1 pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Imagenes de Productos</li>
            </ol>
        </div>
    </div>
    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-diamond-fill"></i>
            </div>
            <h3 class="fw-bolder">Imagenes de Productos</h3>
        </div>

        <p>
            <?= Html::a('Agregar Imagen de Producto', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

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
</div>