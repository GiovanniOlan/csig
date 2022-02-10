<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */

$this->title = 'Actualizar Anuncio: ' . $model->bann_id;
$this->params['breadcrumbs'][] = ['label' => 'Anuncio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bann_id, 'url' => ['view', 'id' => $model->bann_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="banner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>