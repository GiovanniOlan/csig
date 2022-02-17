<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Contacto;
use yii\grid\ActionColumn;


$this->title = 'Contactos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contacto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'con_id',
            'con_nombre',
            'con_correo',
            'con_telefono',
            'con_mensaje:ntext',
            //'con_fecha',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Contacto $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'con_id' => $model->con_id]);
                }
            ],
        ],
    ]); ?>


</div>