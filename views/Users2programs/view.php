<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users2programs */

$this->title = $model->user2program_id;
$this->params['breadcrumbs'][] = ['label' => 'Users 2programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users2programs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'user2program_id' => $model->user2program_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'user2program_id' => $model->user2program_id], [
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
            'user2program_id',
            'schoolYear_id',
            'user_id',
            'program_id',
        ],
    ]) ?>

</div>
