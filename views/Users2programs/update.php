<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users2programs */

$this->title = 'Update Users 2programs: ' . $model->user2program_id;
$this->params['breadcrumbs'][] = ['label' => 'Users 2programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user2program_id, 'url' => ['view', 'user2program_id' => $model->user2program_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users2programs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
