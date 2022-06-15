<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\SchoolYears;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolYearsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Years';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-years-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create School Years', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'schoolYear_id',
            'description',
            'isCurrent',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SchoolYears $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'schoolYear_id' => $model->schoolYear_id]);
                 }
            ],
        ],
    ]); ?>


</div>
