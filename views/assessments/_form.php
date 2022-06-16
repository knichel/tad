<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assessments */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\ArrayHelper; // to create dropDownList
use app\models\Vendors;

$vendorsList = ArrayHelper::map(Vendors::find()->all(),'vendor_id','name');

?>

<div class="assessments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_id')->dropDownList($vendorsList,['prompt'=>'-- Choose a Vendor --']) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'written' => 'Written', 'performance' => 'Performance', ], ['prompt' => '-- Chose a Type --']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
