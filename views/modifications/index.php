<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Modifications;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModificationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modifications-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Modifications', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'modification_id',
            'description',
            'code',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Modifications $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'modification_id' => $model->modification_id]);
                 }
            ],
        ],
    ]); ?>


</div>
