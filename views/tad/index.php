<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Tad;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tad_id',
            'schoolYear_id',
            'program_id',
            'student_id',
            'teacher_id',
            //'written_id',
            //'written_score',
            //'practical_id',
            //'practical_score',
            //'portfolio_score',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tad $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tad_id' => $model->tad_id]);
                 }
            ],
        ],
    ]); ?>


</div>
