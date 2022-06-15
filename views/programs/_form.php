<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Locations;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Programs */
/* @var $form yii\widgets\ActiveForm */

$locationList = ArrayHelper::map(Locations::find()->all(),'location_id', 'name');

?>


<div class="programs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'location_id')->dropDownList($locationList,['prompt'=>'-- Choose a Location --']); 
?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
