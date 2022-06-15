<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Users2programs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Users2programsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users 2programs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users2programs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users 2programs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user2program_id',
            'schoolYear_id',
            'user_id',
            'program_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Users2programs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'user2program_id' => $model->user2program_id]);
                 }
            ],
        ],
    ]); ?>


</div>
