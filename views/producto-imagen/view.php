<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = $model->proimg_id;
$this->params['breadcrumbs'][] = ['label' => 'Imagenes De Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="producto-imagen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->proimg_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->proimg_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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