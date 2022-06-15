<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolYears */

$this->title = $model->schoolYear_id;
$this->params['breadcrumbs'][] = ['label' => 'School Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="school-years-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'schoolYear_id' => $model->schoolYear_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'schoolYear_id' => $model->schoolYear_id], [
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
            'schoolYear_id',
            'description',
            'isCurrent',
        ],
    ]) ?>

</div>
