<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tad_id') ?>

    <?= $form->field($model, 'schoolYear_id') ?>

    <?= $form->field($model, 'program_id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?php // echo $form->field($model, 'written_id') ?>

    <?php // echo $form->field($model, 'written_score') ?>

    <?php // echo $form->field($model, 'practical_id') ?>

    <?php // echo $form->field($model, 'practical_score') ?>

    <?php // echo $form->field($model, 'portfolio_score') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
