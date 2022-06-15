<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolYears */

$this->title = 'Update School Years: ' . $model->schoolYear_id;
$this->params['breadcrumbs'][] = ['label' => 'School Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->schoolYear_id, 'url' => ['view', 'schoolYear_id' => $model->schoolYear_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-years-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
