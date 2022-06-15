<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users2programs */

$this->title = 'Create Users 2programs';
$this->params['breadcrumbs'][] = ['label' => 'Users 2programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users2programs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
