<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="producto-view container rounded-3 py-2 px-1  pt-5">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/producto-imagen/">Imagenes De Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ver Imagen de Producto <?= $model->proimg_id ?></li>
        </ol>
    </div>

    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-3">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-plus-square-fill"></i>
            </div>
            <h3 class="fw-bolder">Imagen del producto con el id: <?= $model->proimg_id ?></h3>
        </div>
        <p class="text-center">
            <?= Html::a('Editar', ['update', 'id' => $model->proimg_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Eliminar', ['delete', 'id' => $model->proimg_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => '¿Estás seguro de que quieres eliminar esta imagen?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'proimg_id',
                //'proimg_url:url',
                [
                    'attribute' => 'imagen',
                    'format' => 'raw',
                ],
                'proimg_fkproducto',
            ],
        ]) ?>
    </div>



</div>