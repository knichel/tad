<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tad */

$this->title = $model->tad_id;
$this->params['breadcrumbs'][] = ['label' => 'Tads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tad_id' => $model->tad_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tad_id' => $model->tad_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tad_id',
            'schoolYear_id',
            'program_id',
            'student_id',
            'teacher_id',
            'written_id',
            'written_score',
            'practical_id',
            'practical_score',
            'portfolio_score',
        ],
    ]) ?>

</div>
