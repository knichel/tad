<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Assessments */

$this->title = 'Update Assessments: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Assessments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'assessment_id' => $model->assessment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assessments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
