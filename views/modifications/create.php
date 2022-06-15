<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modifications */

$this->title = 'Create Modifications';
$this->params['breadcrumbs'][] = ['label' => 'Modifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modifications-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
