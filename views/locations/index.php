<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Locations;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LocationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Locations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'location_id',
            'name',
            'shortCode',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Locations $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'location_id' => $model->location_id]);
                 }
            ],
        ],
    ]); ?>


</div>
