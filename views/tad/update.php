<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tad */

$this->title = 'Update Tad: ' . $model->tad_id;
$this->params['breadcrumbs'][] = ['label' => 'Tads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tad_id, 'url' => ['view', 'tad_id' => $model->tad_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
