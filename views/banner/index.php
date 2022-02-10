<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Banner;
use yii\grid\GridView;
use yii\grid\ActionColumn;


$this->title = 'Anuncios Principales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bann_id',
            'bann_photo',
            'bann_url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Banner $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->bann_id]);
                }
            ],
        ],
    ]); ?>


</div>