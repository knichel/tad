<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Districts;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DistrictsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Districts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="districts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Districts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'distric_id',
            'name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Districts $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'distric_id' => $model->distric_id]);
                 }
            ],
        ],
    ]); ?>


</div>
