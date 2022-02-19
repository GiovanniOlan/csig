<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Producto;
use yii\grid\ActionColumn;
use app\models\ProductoImagen;

$model = Producto::getSpecificProduct($id);
?>
<div class="producto-imagen-index container">
    <div class="rounded-3 py-2 px-1 pt-5">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/producto/update?id=<?= $model->pro_id ?>">Producto: <?= $model->pro_name ?> </a></li>
                <li class="breadcrumb-item active" aria-current="page">Imagenes</li>
            </ol>
        </div>
    </div>
    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-diamond-fill"></i>
            </div>
            <h3 class="fw-bolder">Imagenes del producto: (<?= $model->pro_name ?>)</h3>
        </div>

        <p>
            <?= Html::a('Agregar Imagen Al Producto', ['/producto-imagen/agregar-imagen?id=' . $model->pro_id], ['class' => 'btn btn-success']) ?>
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
                // [
                //     'class' => ActionColumn::className(),
                //     'urlCreator' => function ($action, ProductoImagen $model, $key, $index, $column) {
                //         return Url::toRoute([$action, 'id' => $model->proimg_id]);
                //     }
                // ],
                [
                    'format' => 'raw',
                    'value' => function ($dataProvider) {
                        $btn = Html::a('Editar', ['actualizar-un-producto', 'id' => $dataProvider->proimg_id], ['title' => 'view', 'class' => 'btn btn-warning']);
                        // $btn .= Html::a('Eliminar', ['delete', 'id' => $dataProvider->proimg_id], ['title' => 'view', 'class' => 'btn btn-light']);
                        $btn .=  Html::a('Eliminar', ['delete', 'id' => $dataProvider->proimg_id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => '¿Estás seguro de que quieres eliminar esta imagen?',
                                'method' => 'post',
                            ],
                        ]);
                        return $btn;
                    }
                ],
            ],
        ]); ?>
    </div>
</div>