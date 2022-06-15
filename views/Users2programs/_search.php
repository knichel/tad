<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users2programsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users2programs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user2program_id') ?>

    <?= $form->field($model, 'schoolYear_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'program_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
