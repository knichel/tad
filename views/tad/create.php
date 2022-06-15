<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tad */

$this->title = 'Create Tad';
$this->params['breadcrumbs'][] = ['label' => 'Tads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
