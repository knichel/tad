<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Assessments;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AssessmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assessments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assessments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Assessments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'assessment_id',
            'name',
            'vendor_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Assessments $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'assessment_id' => $model->assessment_id]);
                 }
            ],
        ],
    ]); ?>


</div>
