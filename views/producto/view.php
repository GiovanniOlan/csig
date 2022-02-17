<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="producto-view container rounded-3 py-2 px-1  pt-5">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/producto/">Productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ver Producto <?= $model->pro_id ?></li>
        </ol>
    </div>

    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-3">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-plus-square-fill"></i>
            </div>
            <h3 class="fw-bolder">Producto con el id: <?= $model->pro_id ?></h3>
        </div>

        <p class="text-center">
            <?= Html::a('Editar', ['update', 'id' => $model->pro_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Eliminar', ['delete', 'id' => $model->pro_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => '¿Estás seguro de que quieres eliminar este producto?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'pro_id',
                'pro_name',
                'pro_description:ntext',
                'pro_date',
                [
                    'label' => 'Visibilidad',
                    'attribute' => 'stringStatus',
                    'format' => 'raw',
                ],
                [
                    'label' => 'Imagenes',
                    'attribute' => 'imagen',
                    'format' => 'raw',
                ],

            ],
        ]) ?>
    </div>



</div>