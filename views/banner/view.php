<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="producto-view container rounded-3 py-2 px-1  pt-5">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/producto/">Anuncios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ver Anuncio <?= $model->bann_id ?></li>
        </ol>
    </div>

    <div class="bg-light rounded-3 py-4 px-4 px-md-5 mb-5">

        <div class="text-center mb-3">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                <i class="bi bi-plus-square-fill"></i>
            </div>
            <h3 class="fw-bolder">Anuncio con el id: <?= $model->bann_id ?></h3>
        </div>

        <p>
            <?= Html::a('Actualizar', ['update', 'id' => $model->bann_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Eliminar', ['delete', 'id' => $model->bann_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => '¿Estás seguro de que quieres eliminar este anuncio?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'bann_id',
                'bann_url:url',
                [
                    'attribute' => 'imagen',
                    'format' => 'raw',
                ],
            ],
        ]) ?>
    </div>
</div>