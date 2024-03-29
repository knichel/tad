<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Locations */

$this->title = 'Update Locations: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'location_id' => $model->location_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="locations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
