<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Modifications */

$this->title = $model->modification_id;
$this->params['breadcrumbs'][] = ['label' => 'Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="modifications-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'modification_id' => $model->modification_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'modification_id' => $model->modification_id], [
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
            'modification_id',
            'description',
            'code',
        ],
    ]) ?>

</div>
