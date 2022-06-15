<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'schoolYear_id')->textInput() ?>

    <?= $form->field($model, 'program_id')->textInput() ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'written_id')->textInput() ?>

    <?= $form->field($model, 'written_score')->dropDownList([ 'P' => 'P', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'practical_id')->textInput() ?>

    <?= $form->field($model, 'practical_score')->dropDownList([ 'P' => 'P', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'portfolio_score')->dropDownList([ 'P' => 'P', 'F' => 'F', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
