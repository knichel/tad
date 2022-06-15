<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Vendors;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vendors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vendor_id',
            'name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Vendors $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'vendor_id' => $model->vendor_id]);
                 }
            ],
        ],
    ]); ?>


</div>
