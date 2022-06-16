<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modifications */

$this->title = 'Update Modifications: ' . $model->modification_id;
$this->params['breadcrumbs'][] = ['label' => 'Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->modification_id, 'url' => ['view', 'modification_id' => $model->modification_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modifications-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
